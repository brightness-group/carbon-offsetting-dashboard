<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Helpers\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\IntentRequest;

use App\Events\CarbonClick\{
    ChargeFailed,
    ChargeSucceeded,
    CustomerSourceExpiring,
    InvoicePaymentSucceeded,
    InvoicePaymentFailed
};

class StripeController extends Controller
{
    public function webhook(Request $request)
    {
        $webhook = $request->all();
        $type    = $request->type;

        Log::debug(json_encode($webhook));

        switch ($type) {
            case 'invoice.payment_succeeded':
                InvoicePaymentSucceeded::dispatch($webhook);

                break;

            case 'invoice.payment_failed':
                InvoicePaymentFailed::dispatch($webhook);

                break;

            case 'charge.succeeded':
                ChargeSucceeded::dispatch($webhook);

                break;

            case 'charge.failed':
                ChargeFailed::dispatch($webhook);

                break;

            case 'customer.source.expiring':
                CustomerSourceExpiring::dispatch($webhook);

                break;

            default:
                //
        }

        return response('OK');
    }

    public function setupIntent(IntentRequest $request)
    {
        $shop  = Shop::where('domain', $request->domain)
                     ->where('type', $request->type)
                     ->first();

        $id = null;
        if (!is_null($shop) && !is_null($shop->customer)) {
            $id = $shop->customer['id'];
        }

        $gateway  = new Gateway;
        $intent = $gateway->createSetupIntent($id);

        return response()->json(['secret' => $intent->client_secret]);
    }
}
