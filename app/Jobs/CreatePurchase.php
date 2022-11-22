<?php

namespace App\Jobs;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Repositories\CarbonClickRepository;

class CreatePurchase implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $shop;

    public $param;

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
     * @param Shop $shop
     * @param string $param
     */
    public function __construct(Shop $shop, $param)
    {
        $this->shop  = $shop;
        $this->param = $param;
    }

    /**
     * Execute the job.
     *
     * @param CarbonClickRepository $carbonClick
     * @return void
     */
    public function handle(CarbonClickRepository $carbonClick)
    {
        $response = $carbonClick->createPurchase($this->shop->type, $this->param);

        if ($response->serverError()) {
            $this->release(5 * 60);
        }

        if ($response->successful()) {
            $data = $response->json();

            $purchase = $this->shop->purchases->where('number', $this->param['paymentReference'])->first();

            if (!is_null($purchase)) {
                $purchase->update([
                    'purchase_reference' => $data['orderReference'],
                    'purchase_id'        => $data['purchaseId']
                ]);
            }
        }
    }
}
