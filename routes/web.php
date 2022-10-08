<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/origen', function () {
    return view('origen');
});
Route::get('/origen2', function () {
    return view('origen2');
});
Route::get('/origen3', function () {
    return view('origen3');
});
Route::get('/cambio', function () {
return view('cambio');
});
Route::get('/cambio2', function () {
return view('cambio2');
});
Route::get('/cambio3', function () {
return view('cambio3');
});
Route::get('/aportodas', function () {
return view('aportodas');
});
Route::get('/final', function () {
return view('final');
});
Route::get('/hastapronto', function () {
    return view('hastapronto');
    });