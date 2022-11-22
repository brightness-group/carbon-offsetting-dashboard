<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;

use App\Events\CarbonClick\{
    ChargeFailed,
    ChargeSucceeded,
    CustomerSourceExpiring,
    InvoicePaymentSucceeded,
    InvoicePaymentFailed
};

use App\Listeners\CarbonClick\{
    SendEmailVerificationNotification,
    SendChargeFailedNotification,
    SendChargeSucceededNotification,
    SendCustomerSourceExpiringNotification,
    SendInvoicePaymentSucceededNotification,
    SendInvoicePaymentFailedNotification
};

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        ChargeFailed::class => [
            SendChargeFailedNotification::class
        ],

        ChargeSucceeded::class => [
            SendChargeSucceededNotification::class
        ],

        CustomerSourceExpiring::class => [
            SendCustomerSourceExpiringNotification::class
        ],

        InvoicePaymentSucceeded::class => [
            SendInvoicePaymentSucceededNotification::class
        ],

        InvoicePaymentFailed::class => [
            SendInvoicePaymentFailedNotification::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
