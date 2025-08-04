<?php

namespace App\Common\Util;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\Accionista;
use App\Models\ExchangeRate;
use App\Models\Currency;
use App\Models\CurrencyPair;
use App\Models\ExchangeOffice;

use stdClass;

abstract class UGeneral
{

    /**
     * Get USA States
     * @param string $key (State Code or State Name)
     * @param bool $all. Default: false (Return all States including disabled States)
     *
     * @return \Illuminate\Support\Collection;
     */

     public static function getLastRateDate($officeId = null)
     {
        if (is_null($officeId))
            $lastRecordDateFirst = ExchangeRate::orderBy('updated_at', 'desc')->first();
        else
            $lastRecordDateFirst = ExchangeRate::where('exchange_office_id', $officeId)
                                    ->orderBy('updated_at', 'desc')->first();

        $lastRecordDate = $lastRecordDateFirst->updated_at;

        if ($lastRecordDate) {
            $daysOfWeek = [
                0 => 'domingo',
                1 => 'lunes',
                2 => 'martes',
                3 => 'miércoles',
                4 => 'jueves',
                5 => 'viernes',
                6 => 'sábado',
            ];

            $dayOfWeek = $daysOfWeek[date('w', strtotime($lastRecordDate))];


            $date = $dayOfWeek . ' ' . date('d/m H:i', strtotime($lastRecordDate)) . ' hs';
        } else {
            $date = "";
        }

        return $date;

     }

}
