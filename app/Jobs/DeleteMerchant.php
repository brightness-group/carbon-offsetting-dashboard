<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Repositories\CarbonClickRepository;

class DeleteMerchant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $type;

    public $code;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 0;

    /**
     * The maximum number of unhandled exceptions to allow before failing.
     *
     * @var int
     */
    public $maxExceptions = 3;

    /**
     * Determine the time at which the job should timeout.
     *
     * @return \DateTime
     */
    public function retryUntil()
    {
        return now()->addHours(12);
    }

    /**
     * Create a new job instance.
     *
     * @param string $type
     * @param string $code
     */
    public function __construct($type, $code)
    {
        $this->type = $type;
        $this->code = $code;
    }

    /**
     * Execute the job.
     *
     * @param CarbonClickRepository $carbonClick
     * @return void
     */
    public function handle(CarbonClickRepository $carbonClick)
    {
        $response = $carbonClick->deleteMerchant($this->type, $this->code);

        if ($response->serverError()) {
            $this->release(5 * 60);
        }
    }
}
