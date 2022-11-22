<?php

namespace App\Events\CarbonClick;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChargeSucceeded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $webhook;

    /**
     * Create the event instance.
     *
     * @param $webhook
     */
    public function __construct($webhook)
    {
        $this->webhook = $webhook;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
