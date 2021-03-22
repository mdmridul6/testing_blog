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


Route::get('/', [\App\Http\Controllers\Home::class,'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\Home::class,'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\Home::class,'authenticate'])->name('login');

Route::get('/register', [\App\Http\Controllers\Home::class,'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\Home::class,'registerProcess'])->name('register');
Route::prefix('/profile')->middleware('auth')->group(function () {
    Route::get('/{userId}',[App\Http\Controllers\profile::class,'index'])->name('profile');

});
