<?php

namespace App\Helpers;

use Carbon\Carbon;
use Stripe\StripeClient;

class Gateway
{
    private $key;

    private $stripe;

    public function __construct()
    {
        $this->key    = config('carbonclick.stripe.secret_key');
        $this->stripe = new StripeClient($this->key);
    }

    public function initCustomer($shop, $request)
    {
        try {
            /* Retrieve SetupIntent */
            $customer = $this->updateCustomer($shop, $request);

            /* Charge Topup */
            if (is_null($shop->customer)) {
                $topup = config('carbonclick.default_topup');
                $description = $shop->formattedType() . " Topup for $shop->name";

                $this->createPaymentIntent(
                    $topup,
                    $shop->currency,
                    $customer->id,
                    $customer->invoice_settings->default_payment_method,
                    $description
                );
            }

            /* Subscribe */
            if (is_null($shop->subscription)) {
                $days  = Carbon::now()->addDays(config('carbonclick.trial_days'));
                $trial = (is_null($shop->trial_ends_on)) ? $days->timestamp : $shop->trial_ends_on->timestamp;

                $subscribe = $this->subscribe($customer->id, $trial, $shop->type);
            }

            return [
                'success'      => true,
                'customer'     => $customer,
                'subscription' => isset($subscribe) ? $subscribe : $shop->subscription,
                'balance'      => isset($topup) ? $topup : $shop->balance_remaining,
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public function updateCustomer($shop, $request)
    {
        /* Retrieve SetupIntent */
        $intent = $this->retrieveSetupIntent($request->setupintent_id);

        /* Set Customer Information */
        return $this->stripe->customers->update(
            $intent->customer,
            [
                'name'             => $shop->name,
                'email'            => $shop->email,
                'description'      => "$shop->type | $shop->name",
                'invoice_settings' => [
                    'default_payment_method' => $intent->payment_method
                ]
            ]
        );
    }

    public function retrieveCard($customer)
    {
        return $this->stripe->paymentMethods->retrieve($customer['invoice_settings']['default_payment_method'])->card;
    }

    public function subscribe($id, $trial, $type)
    {
        $data = [
            'customer' => $id,
            'items'    => [
                [
                    'price' => config("carbonclick.{$type}.price_id")
                ]
            ]
        ];

        $isFuture = Carbon::createFromTimestamp($trial)->isFuture();

        if (!is_null($trial) && $isFuture) {
            $data['trial_end'] = $trial;
        }

        return $this->stripe->subscriptions->create($data);
    }

    public function unSubscribe($id)
    {
        return $this->stripe->subscriptions->cancel($id);
    }

    public function pauseSubscribe($id)
    {
        return $this->stripe->subscriptions->update(
            $id,
            [
                'pause_collection' => ['behavior' => 'void']
            ]
        );
    }

    public function resumeSubscribe($id)
    {
        return $this->stripe->subscriptions->update(
            $id,
            ['pause_collection' => '']
        );
    }

    public function charge($shop, $amount)
    {
        $customer    = $shop->customer;
        $id          = $customer['id'];
        $method      = $customer['invoice_settings']['default_payment_method'];
        $description = $shop->formattedType() . " Topup for $shop->name";

        return $this->createPaymentIntent($amount, $shop->currency, $id, $method, $description);
    }

    public function createSetupIntent($id = null)
    {
        try {
            if (is_null($id)) {
                $customer = $this->stripe->customers->create();
                $id = $customer->id;
            }

            return $this->stripe->setupIntents->create([
                'customer' => $id
            ]);
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            return $this->createSetupIntent(null);
        }
    }

    public function retrieveSetupIntent($secret)
    {
        return $this->stripe->setupIntents->retrieve($secret);
    }

    public function createPaymentIntent($amount, $currency, $id, $method, $description)
    {
        return $this->stripe->paymentIntents->create([
            'currency'       => $currency,
            'amount'         => $amount * 100,
            'customer'       => $id,
            'payment_method' => $method,
            'off_session'    => true,
            'confirm'        => true,
            'description'    => $description
        ]);
    }
}
