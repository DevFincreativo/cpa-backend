<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;


class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'name' => 'Dólar',
            'icon' => 'dollar.png',
            'symbol' => '$',
            'meta' => json_encode(['key' => 'value']),
        ]);

        Currency::create([
            'name' => 'Euro',
            'icon' => 'euro.png',
            'symbol' => '€',
            'meta' => json_encode(['key' => 'value']),
        ]);
    }
}
