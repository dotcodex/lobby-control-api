<?php

namespace App\Http\Controllers\Province;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Province;

class ProvinceController extends Controller
{
    public function getProvinces(){
    
        $provinces = Province::all();
        return response()->json(['data'=> $provinces],200);
    }
    public function getProvincesId($id){
        $provinces = Province::find($id);
        return response()->json(['data'=> $provinces],201);


    }
}
