<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExchangeOffice;


class ExchangeOfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExchangeOffice::create([
            'name' => 'CASA CENTRAL CIUDAD DEL ESTE',
            'meta' => json_encode(['key' => 'value']),
        ]);

        ExchangeOffice::create([
            'name' => 'Casa de Cambio 2',
            'meta' => json_encode(['key' => 'value']),
        ]);
    }
}
