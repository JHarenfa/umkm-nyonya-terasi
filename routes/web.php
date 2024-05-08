<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get("/makanan-berat", function(){
    return View::make('makanan-berat');
});

Route::get("/gorengan", function(){
    return view('gorengan');
});
Route::get("/sambal", function(){
    return view('sambal');
});
Route::get("/minuman", function(){
    return view('minuman');
});