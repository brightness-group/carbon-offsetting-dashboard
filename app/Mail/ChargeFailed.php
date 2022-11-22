<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChargeFailed extends Mailable
{
    use Queueable, SerializesModels;

    public $charge;

    /**
     * Create a new message instance.
     *
     * @param $charge
     */
    public function __construct($charge)
    {
        $this->charge = $charge;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.carbonclick.charge-failed')
                    ->subject('CarbonClick: Top-up recharge failed');
    }
}
