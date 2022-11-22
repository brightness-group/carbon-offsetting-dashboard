<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Token;
use Illuminate\Support\Facades\Http;

class CarbonClickRepository implements CarbonClickRepositoryInterface
{
    public function login($type)
    {
        $carbonClick = config('carbonclick');

        $response = Http::withHeaders([
            'content-type' => 'application/x-amz-json-1.1'
        ])
            ->post($carbonClick['links']['oauth'], [
                'AuthFlow'       => 'USER_PASSWORD_AUTH',
                'ClientId'       => $carbonClick[$type]['client'],
                'AuthParameters' => [
                    'USERNAME' => $carbonClick[$type]['username'],
                    'PASSWORD' => $carbonClick[$type]['password'],
                ]
            ])
            ->json();

        $result = $response['AuthenticationResult'];

        return Token::updateOrCreate(
            ['type' => $type],
            [
                'access_token'  => $result['AccessToken'],
                'refresh_token' => $result['RefreshToken'],
                'expires_at'    => Carbon::now()->addSeconds($result['ExpiresIn'])->toDateTimeString()
            ]
        );
    }

    public function refreshToken($type)
    {
        $carbonClick = config('carbonclick');

        $token = Token::whereType($type)->first();

        if (is_null($token)) {
            $token = $this->login($type);
        } else {
            $response = Http::withHeaders([
                'content-type' => 'application/x-amz-json-1.1'
            ])
                ->post($carbonClick['links']['oauth'], [
                    'AuthFlow'       => 'REFRESH_TOKEN_AUTH',
                    'ClientId'       => $carbonClick[$type]['client'],
                    'AuthParameters' => [
                        'REFRESH_TOKEN' => $token->refresh_token
                    ]
                ]);

            if ($response->failed()) {
                $token = $this->login($type);
            } else {
                $response = $response->json();
                $result = $response['AuthenticationResult'];

                $token->update([
                    'access_token'  => $result['AccessToken'],
                    'expires_at'    => Carbon::now()->addSeconds($result['ExpiresIn'])->toDateTimeString()
                ]);
            }
        }

        return $token;
    }

    public function allImpact($type)
    {
        $carbonClick = config('carbonclick');
        $server      = env('CARBONCLICK_ENV', 'dev');

        $token = Token::whereType($type)->first();

        if (is_null($token) || !$token->expires_at->isPast()) {
            $token = $this->refreshToken($type);
        }

        $api = $carbonClick[$server]['api'];
        $url = "$api/impacts/v1/all";

        return Http::withHeaders([
            'x-api-key'     => $carbonClick[$type]['key'],
            'Authorization' => "Bearer $token->access_token",
            'content-type'  => 'application/json'
        ])
            ->get($url)
            ->json();
    }

    public function merchantImpact($type, $code)
    {
        $carbonClick = config('carbonclick');
        $server      = env('CARBONCLICK_ENV', 'dev');

        $token = Token::whereType($type)->first();

        if (is_null($token) || $token->expires_at->isPast()) {
            $token = $this->refreshToken($type);
        }

        $api = $carbonClick[$server]['api'];
        $url = "$api/impacts/v1/merchants?merchantCode=$code";

        return Http::withHeaders([
            'x-api-key'     => $carbonClick[$type]['key'],
            'Authorization' => "Bearer $token->access_token",
            'content-type'  => 'application/json'
        ])
            ->get($url)
            ->json();
    }

    public function createMerchant($type, $param)
    {
        $carbonClick = config('carbonclick');
        $server      = env('CARBONCLICK_ENV', 'dev');

        $token = Token::whereType($type)->first();

        if (is_null($token) || $token->expires_at->isPast()) {
            $token = $this->refreshToken($type);
        }

        $api = $carbonClick[$server]['api'];
        $url = "$api/merchants/v1";

        return Http::withHeaders([
            'x-api-key'     => $carbonClick[$type]['key'],
            'Authorization' => "Bearer $token->access_token",
            'content-type'  => 'application/json'
        ])
            ->post($url, $param)
            ->json();
    }

    public function deleteMerchant($type, $code)
    {
        $carbonClick = config('carbonclick');
        $server      = env('CARBONCLICK_ENV', 'dev');

        $token = Token::whereType($type)->first();

        if (is_null($token) || $token->expires_at->isPast()) {
            $token = $this->refreshToken($type);
        }

        $api = $carbonClick[$server]['api'];
        $url = "$api/merchants/v1/$code";

        return Http::withHeaders([
            'x-api-key'     => $carbonClick[$type]['key'],
            'Authorization' => "Bearer $token->access_token",
            'content-type'  => 'application/json'
        ])
            ->delete($url);
    }

    public function createPurchase($type, $param)
    {
        $carbonClick = config('carbonclick');
        $server      = env('CARBONCLICK_ENV', 'dev');

        $token = Token::whereType($type)->first();

        if (is_null($token) || $token->expires_at->isPast()) {
            $token = $this->refreshToken($type);
        }

        $platform = ($type == 'woocommerce') ? 'woo' : $type;

        $api = $carbonClick[$server]['api'];
        $url = "$api/purchases/v1/$platform";

        return Http::withHeaders([
            'x-api-key'     => $carbonClick[$type]['key'],
            'Authorization' => "Bearer $token->access_token",
            'content-type'  => 'application/json'
        ])
            ->post($url, $param);
    }

    public function reversePurchase($type, $id, $param)
    {
        $carbonClick = config('carbonclick');
        $server      = env('CARBONCLICK_ENV', 'dev');

        $token = Token::whereType($type)->first();

        if (is_null($token) || $token->expires_at->isPast()) {
            $token = $this->refreshToken($type);
        }

        $api = $carbonClick[$server]['api'];
        $url = "$api/purchases/v1/reversals/$id";

        return Http::withHeaders([
            'x-api-key'     => $carbonClick[$type]['key'],
            'Authorization' => "Bearer $token->access_token",
            'content-type'  => 'application/json'
        ])
            ->post($url, $param);
    }
}
