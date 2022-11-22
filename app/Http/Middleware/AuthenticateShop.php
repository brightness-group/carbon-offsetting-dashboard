<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Shop;

class AuthenticateShop
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $block = null)
    {
        $token = $request->bearerToken();

        if (is_null($token)) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        $shop = Shop::where('access_token', $request->bearerToken())->first();

        if (is_null($shop)) {
            return response()->json([
                'success' => false,
                'error'   => 'token',
                'message' => 'Invalid token.'
            ]);
        }

        if ($block === 'unblocked' && !is_null($shop->blocked_at)) {
            return response()->json([
                'success' => false,
                'error'   => 'blocked',
                'message' => 'Your Shop has been blocked. Please contact the CarbonClick for more details.',
            ]);
        }

        return $next($request);
    }
}
