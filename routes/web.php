<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MarketController;
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

Route::get('/',function(){
    return view('welcome');
});
Route::get('/store',function(){
    return view('store');
});

Auth::routes();


// Route::resource('/services', App\Http\Controllers\ServiceController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', TeamController::class);

Route::resource('market', MarketController::class);

Route::get('/checkout', [App\Http\Controllers\TeamController::class, 'checkout'])->name('checkout');
Route::get('/tickets', [App\Http\Controllers\TeamController::class, 'home'])->name('tickets');
