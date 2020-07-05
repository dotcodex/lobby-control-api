<?php

namespace App\Http\Controllers\Commune;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commune;
use App\Province;

class CommuneController extends Controller
{
    public function getCommunes(){
        $communes = Commune::all();
        return response()->json( $communes,200);
    }
    public function getCommunesByProvince($id){
        $communes = Commune::where('province_id', $id)->get();
       // dd($region);
        return response()->json($communes,201);
    }
}
