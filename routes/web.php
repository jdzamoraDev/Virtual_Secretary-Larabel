<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\StoreController;
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
Route::get('/contactForm',function(){
    return view('/contactForm');
});

Auth::routes();


// Route::resource('/services', App\Http\Controllers\ServiceController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', TeamController::class);
Route::resource('stores', StoreController::class);


Route::get('/checkout', [App\Http\Controllers\TeamController::class, 'checkout'])->name('checkout');
Route::get('/tickets', [App\Http\Controllers\TeamController::class, 'home'])->name('tickets');
Route::get('/homestore', [App\Http\Controllers\StoreController::class, 'homestore'])->name('homestore');

Route::get('/contact', [App\Http\Controllers\TeamController::class, 'contact'])->name('contact');


Route::get('/contact', function () {
    return view('contact');
});
