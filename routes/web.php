<?php
use File as F;

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return F::get(public_path() . '/index.html');
});
Route::get('/diagnostico', function() {
    return F::get(public_path() . '/diagnostico.html');
});
Route::get('hola', function(){
    return view('email/send-diagnostic');
});
