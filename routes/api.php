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
Route::get('regions/{id}', 'Region\RegionController@getRegionsId');
Route::get('provinces', 'Province\ProvinceController@getProvinces');
Route::get('provinces/{id}', 'Province\ProvinceController@getProvincesByRegion');
Route::get('communes', 'Commune\CommuneController@getCommunes');
Route::get('communes/{id}', 'Commune\CommuneController@getCommunesByProvince');