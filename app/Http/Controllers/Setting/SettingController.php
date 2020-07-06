<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function getSetting(){
    $datos =    env('SERVICE_PRICE');
    $datoNumerico = intval($datos);

    return response()->json(['servicePrice' => $datoNumerico]);
    }
}
