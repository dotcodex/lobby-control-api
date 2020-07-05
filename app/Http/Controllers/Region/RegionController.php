<?php

namespace App\Http\Controllers\Region;

use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getRegions(){
        $regions = Region::all();
        return response()->json( $regions,200);
    }
}
