<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commune;
use App\Province;

class CommuneController extends Controller
{
    public function getCommunesByProvince($id){
        $communes = Commune::where('province_id', $id)->get();
       // dd($region);
        return response()->json($communes,201);
    }
}
