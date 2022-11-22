<?php

namespace App\Http\Controllers;

use App\Models\CountrySetting;

class CountryController extends Controller
{
    public function list()
    {
        $countries = CountrySetting::get(['country_name', 'country_alpha2', 'taxable']);

        return response()->json(['data' => $countries]);
    }
}
