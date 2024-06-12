<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

/* Main Page*/
Route::get('/', function () {
    $products = DB::table('products')->get();
    return view('home',[
        'products'=>$products
    ]);
})->name('home');

Route::get('/makanan-berat', function () {
    $products = DB::table('products')->get();
    return view('makanan-berat',[
        'products'=>$products
    ]);
})->name('makanan-berat');
Route::get('/gorengan', function () {
    $products = DB::table('products')->get();
    return view('gorengan',[
        'products'=>$products
    ]);
})->name('gorengan');
Route::get('/sambal', function () {
    $products = DB::table('products')->get();
    return view('sambal',[
        'products'=>$products
    ]);;
})->name('sambal');
Route::get('/minuman', function () {
    $products = DB::table('products')->get();
    return view('minuman',[
        'products'=>$products
    ]);;
})->name('minuman');

/* Dashboard */
Route::get('/admin', function () {
    return view('welcome');
})->name('admin');

Route::get('/create', function () {
    return view('create');
})->middleware(['auth', 'verified'])->name('create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('products', ProductController::class);  
