<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Law;


class LawsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Law::create([
            'name' => 'Ley N° 1.015/1997',
            'description' => 'Previene y Reprime los Actos Ilícitos Destinados a la Legitimación de Dinero o Bienes.',
            'file' => 'descargar1.pdf',
        ]);

        Law::create([
            'name' => 'Ley N° 3.783/2009',
            'description' => 'Modifica varios Artículos de la Ley No 1.015/97. Que Previene y Reprime los Actos Ilícitos Destinados a la Legitimación de Dinero o Bienes.',
            'file' => 'descargar2.pdf',
        ]);

        Law::create([
            'name' => 'Ley N° 4.024/2010',
            'description' => 'Castiga los Hechos Punibles de Terrorismo, Asociación Terrorista y Financiamiento del Terrorismo.',
            'file' => 'descargar3.pdf',
        ]);

        Law::create([
            'name' => 'Ley N° 4100/2010',
            'description' => 'Aprueba el Memorando de Entendimiento entre los Gobiernos de los Estados del GAFISUD.',
            'file' => 'descargar4.pdf',
        ]);

        Law::create([
            'name' => 'Ley N° 5.582/2016',
            'description' => 'Aprueba la enmienda al Memorando de Entendimiento del Grupo de Acción Financiera de Sudamérica Contra el Lavado de Activos (Gafisud).',
            'file' => 'descargar5.pdf',
        ]);

        Law::create([
            'name' => 'Ley No 5.895/17',
            'description' => 'Establece reglas de transparencia en el régimen de las Sociedades constituidas por acciones.',
            'file' => 'descargar6.pdf',
        ]);
    }
}
