<?php

namespace App\Http\Controllers\Province;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Province;
use App\Region;

class ProvinceController extends Controller
{
    public function getProvinces(){
    
        $provinces = Province::all();
        return response()->json( $provinces,200);
    }
    public function getProvincesId($id){
        $provinces = Province::all()->where('region_id',$id);
       // dd($provinces->flatten());
        return response()->json( $provinces->flatten([]),201);


    }
}
