<?php

namespace App\Http\Controllers\Commune;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commune;

class CommuneController extends Controller
{
    public function getCommunes(){
        $communes = Commune::all();
        return response()->json(['data'=> $communes],200);
    }
    public function getCommunesId($id){
        $communes = Commune::find($id);
        return response()->json(['data'=> $communes],201);


    }
}
