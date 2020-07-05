<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::resource('contact', 'Email\EmailController', ['except' => ['destroy']]);
Route::post('contact', 'Email\EmailController@sendContactEmail');
Route::get('regions', 'Region\RegionController@getRegions');
Route::get('provinces/{region_id}', 'Province\ProvinceController@getProvincesByRegion');
Route::get('communes/{province_id}', 'Commune\CommuneController@getCommunesByProvince');