<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExchangeRate;


class ExchangeRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExchangeRate::create([
            'currency_pair_id' => 1,
            'buy_rate' => 1.12,
            'sell_rate' => 1.1,
            'exchange_office_id' => 1,
            'symbol_buy' => '$',
            'symbol_sell' => '€',
            'meta' => json_encode(['key' => 'value']),
        ]);
    }
}
