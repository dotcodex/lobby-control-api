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
    public function getCommunesId($id){
        $communes = Commune::all()->where('province_id', $id);
       // dd($region);
        return response()->json( $communes,201);


    }
}
