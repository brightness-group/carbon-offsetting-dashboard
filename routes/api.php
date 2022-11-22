<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('shops', 'ShopController@create');
Route::get('countries', 'CountryController@list');
Route::post('carbonclick/config', 'CarbonClickController@config');
Route::get('carbonclick/impacts/all/{type}', 'CarbonClickController@allImpact');

Route::post('stripe/setup-intent', 'StripeController@setupIntent');

Route::group(['middleware' => 'shop:unblocked'], function() {
    Route::post('purchases', 'PurchaseController@create');
    Route::put('shops/edit', 'ShopController@update');
});

Route::group(['middleware' => 'shop'], function() {
    Route::put('purchases/refund', 'PurchaseController@refund');

    Route::get('shops/details', 'ShopController@show');
    Route::put('shops/card', 'ShopController@updateCard');
    Route::post('shops/status', 'ShopController@status');

    Route::put('rewards/redeem', 'ShopController@redeemRewards');
    Route::get('carbonclick/impacts/merchant', 'CarbonClickController@merchantImpact');

});
