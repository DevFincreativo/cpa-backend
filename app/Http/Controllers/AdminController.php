<?php

namespace App\Http\Controllers;

use App\Models\CurrencyPair;
use App\Models\ExchangeOffice;
use Illuminate\Http\Request;
use App\Models\ExchangeRate;
use App\Models\Media;
use App\Common\Util\UGeneral;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');
    }


  }
