<?php

namespace App\Repositories;

interface CarbonClickRepositoryInterface
{
    public function login($type);

    public function refreshToken($type);

    public function allImpact($type);

    public function merchantImpact($type, $code);

    public function createMerchant($type, $param);

    public function deleteMerchant($type, $code);

    public function createPurchase($type, $param);

    public function reversePurchase($type, $id, $param);
}
