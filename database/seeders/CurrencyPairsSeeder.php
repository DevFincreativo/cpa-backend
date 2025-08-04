<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CurrencyPair;


class CurrencyPairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurrencyPair::create([
            'name' => 'USD to EUR',
            'currency_1' => 1,
            'currency_2' => 2, 
            'meta' => json_encode(['key' => 'value']),
        ]);
    }
}
