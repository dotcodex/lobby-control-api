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
    return F::get(public_path() . '/home.html');
});
Route::get('/diagnostico', function() {
    return F::get(public_path() . '/diagnostico.html');
});
Route::get('/test', function(){
    return view('email/send-diagnostic');
});
Route::get('/quotation', function(){
    return view('email/send-quotation');
});
Route::get('/contact', function(){
    return view('email/message-received');
});
