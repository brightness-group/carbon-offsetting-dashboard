<?php

namespace App\Http\Requests;

use App\Models\{History, Shop};
use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'           => 'required|email',
            'name'            => 'required',
            'price'           => 'required',
            'currency'        => 'required',
            'quantity'        => 'required|integer',
            'preferred_topup' => 'required',
            'number'          => 'required',
            'total_price'     => 'required',
            'billing_address' => 'required'
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        if ($validator->fails()) {
            $shop = Shop::firstWhere('access_token', $this->bearerToken());

            $validator->after(function ($validator) use ($shop) {
                History::create([
                    'name'     => 'PurchaseRequest@rules',
                    'shop_id'  => is_null($shop) ? null : $shop->id,
                    'request'  => $this->all(),
                    'response' => $validator->errors(),
                ]);
            });
        }
    }
}
