<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\BookProductController;
use App\Http\Controllers\BookJenisController;
use App\Http\Controllers\BookIdentityController;
use App\Http\Controllers\HomeController;

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


Route::group(['middleware'], function(){
    Auth::routes();
    Route::resource('book', BookProductController::class);

    Route::resource('jenis', BookJenisController::class);

    Route::resource('identity', BookIdentityController::class);
    
    Route::get('/', [bookController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
