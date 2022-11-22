<?php

namespace App\Exports;

use App\Models\Shop;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ShopsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Shop::all();
    }

    public function headings(): array
    {
        return [
            'Store',
            'Country',
            'Status',
            'Last Impression',
            'Orders',
            'Last Offset',
            'Offsets',
            '%',
            'Sales',
            'MoM%',
            'Invoiced',
            'Charge Bal',
            'Rewards',
            'Trial Ends',
        ];
    }

    public function map($shop): array
    {
        return [
            $shop->merchant_code,
            $shop->country_code,
            $shop->status(),
            $shop->last_impression,
            $shop->orders_count,
            ($shop->purchases->count()) ? $shop->purchases->last()->created_at : null,
            $shop->purchases->sum('quantity'),
            $shop->orderPercent(),
            $shop->purchases->sum('price'),
            $shop->mom(),
            $shop->purchases->sum('invoice_price'),
            $shop->balance_remaining,
            $shop->rewards_balance,
            (is_null($shop->trial_ends_on)) ? null : $shop->trial_ends_on->toDateString()
        ];
    }
}
