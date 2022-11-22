<?php

namespace App\Listeners\CarbonClick;

use Carbon\Carbon;
use App\Models\Shop;
use Illuminate\Support\Facades\Mail;
use App\Events\CarbonClick\ChargeFailed;

class SendChargeFailedNotification
{

    /**
     * Create the event listener.
     *
     * @param void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ChargeFailed  $event
     * @return void
     */
    public function handle(ChargeFailed $event)
    {
        $object = $event->webhook['data']['object'];

        $shop = Shop::where('customer->id', $object['customer'])->first();

        if (!is_null($shop)) {
            $shop->update([
                'state'            => 'charge_failed',
                'state_changed_at' => Carbon::now()->toDateTimeString()
            ]);

            $charge = [
                'name'     => $shop->shop_owner,
                'amount'   => $object['amount'] / 100,
                'currency' => $object['currency']
            ];

            Mail::to($shop->email)->send(new \App\Mail\ChargeFailed($charge));

            sendWebhook($shop, 'charge_failed', 'Your Top-up charge has been failed!');
        }
    }
}
