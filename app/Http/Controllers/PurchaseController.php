<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\{History, Shop};
use App\Helpers\Gateway;
use App\Jobs\{CreatePurchase, ReversePurchase};
use App\Repositories\CarbonClickRepositoryInterface;
use App\Http\Requests\{PurchaseRequest, RefundRequest};

class PurchaseController extends Controller
{
    protected $carbonClick;

    public function __construct(CarbonClickRepositoryInterface $carbonClick)
    {
        $this->carbonClick = $carbonClick;
    }

    public function create(PurchaseRequest $request)
    {
        try {
            $message = 'Purchase detail logged.';
            $success = true;

            $shop = Shop::where('access_token', $request->bearerToken())->first();

            $input = $request->all();
            $input['price']         = round($input['price'], 2, PHP_ROUND_HALF_EVEN);
            $input['total_price']   = round($input['total_price'], 2, PHP_ROUND_HALF_EVEN);
            $input['invoice_price'] = round($this->calculateInvoicePrice($input['total_price']), 2, PHP_ROUND_HALF_EVEN);

            /* If Top-up is >= 90, Auto Recharge Top-up */
            $currentTopup   = $shop->balance_remaining;
            $preferredTopup = $request->preferred_topup;
            $updatedTopup   = $currentTopup - $input['invoice_price'];

            if ($shop->mode === 'prepaid') {

                $percentage = round(($input['invoice_price'] / $currentTopup) * 100, 2);

                if ($percentage >= 90) {
                    try {
                        $gateway = new Gateway;
                        $gateway->charge($shop, $preferredTopup);

                        $updatedTopup += $preferredTopup;
                    } catch (\Exception $e) {
                        $success = false;

                        $json = [
                            'success' => $success,
                            'message' => $e->getMessage()
                        ];
                    }
                }
            }

            if ($success) {
                /* Save Carbon Offset Purchase History */
                CreatePurchase::dispatch(
                    $shop,
                    [
                        'merchantCode'      => $shop->merchant_code,
                        'emailAddress'      => $input['email'],
                        'billingCountry'    => isset($input['billing_address']['country']) ? $input['billing_address']['country'] : null,
                        'paymentReference'  => $input['number'],
                        'paymentProviderId' => $input['gateway'],
                        'payment'           => [
                            'value'    => $input['total_price'],
                            'currency' => $input['currency']
                        ]
                    ]
                );

                $shop->purchases()->create($input);

                /* Set 10% Reward in USD */
                $reward = (10 / 100) * $input['total_price'];

                $shop->increment('offsets_count', $input['quantity'], [
                    'balance_remaining' => ($shop->mode === 'prepaid') ? $updatedTopup : 0,
                    'preferred_topup'   => $preferredTopup,
                    'rewards_balance'   => $shop->rewards_balance + $reward
                ]);

                $json = [
                    'success' => $success,
                    'message' => $message
                ];
            }
        } catch (\Exception $e) {
            $json = [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }

        History::create([
            'name'     => 'PurchaseController@create',
            'shop_id'  => $shop->id,
            'request'  => $request->all(),
            'response' => $json,
        ]);

        return response()->json($json);
    }

    public function refund(RefundRequest $request)
    {
        try {
            $shop = Shop::where('access_token', $request->bearerToken())->first();

            $order = $shop->purchases()
                          ->where('number', $request->number)
                          ->whereNull('cancelled_at')
                          ->first();

            if (!is_null($order)) {
                ReversePurchase::dispatch($shop->type, $order->purchase_id, ['reversalReason' => $request->cancel_reason]);

                /* Decrement Reward */
                $reward = (10 / 100) * $order->invoice_price;

                $shop->update([
                    'balance_remaining' => ($shop->mode === 'prepaid') ? $shop->balance_remaining + $order->invoice_price : 0,
                    'offsets_count'     => $shop->offsets_count - $order->quantity,
                    'rewards_balance'   => $shop->rewards_balance - $reward
                ]);

                $order->update([
                    'state'         => 'reversed',
                    'cancel_reason' => $request->cancel_reason,
                    'cancelled_at'  => Carbon::now()->toDateTimeString()
                ]);

                $json = ['success' => true];
            }

            $json = [
                'success' => false,
                'message' => 'Order not available for refund.'
            ];
        } catch (\Exception $e) {
            $json = [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }

        History::create([
            'name'     => 'PurchaseController@refund',
            'shop_id'  => $shop->id,
            'request'  => $request->all(),
            'response' => $json,
        ]);

        return response()->json($json);
    }

    /* Calculate Invoice Price Based on Stripe Commission */
    private function calculateInvoicePrice($price, $extra = 0)
    {
        $cent = $price * 100;
        $afterCommission = $cent * ((100 - 2.9) / 100);

        return ($afterCommission - $extra) / 100;
    }
}
