<?php

namespace App\Http\Controllers\Province;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Province;
use App\Region;

class ProvinceController extends Controller
{
    public function getProvincesByRegion($id){
        $provinces = Province::where('region_id',$id)->get();
        return response()->json( $provinces,201);
    }
}
