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


Route::middleware('guest')->group(function (){
    Route::get('/login', [\App\Http\Controllers\Home::class,'login'])->name('login');
    Route::get('/register', [\App\Http\Controllers\Home::class,'register'])->name('register');
});
    Route::post('/login', [\App\Http\Controllers\Home::class,'authenticate'])->name('login');
    Route::post('/register', [\App\Http\Controllers\Home::class,'registerProcess'])->name('register');


Route::middleware('auth')->group(function () {
Route::get('/logout',[\App\Http\Controllers\Home::class,'logout'])->name('logout');
    Route::prefix('/profile')->group(function (){
        Route::get('/{userId}',[App\Http\Controllers\profile::class,'index'])->name('profile');
    });

    Route::prefix('/category')->group(function (){
        Route::get('/',[App\Http\Controllers\CategoryController::class,'index'])->name('category');
        Route::get('/create',[App\Http\Controllers\CategoryController::class,'create'])->name('categoryAdd');
        Route::post('/create',[App\Http\Controllers\CategoryController::class,'store'])->name('categoryAdd');
    });

    Route::prefix('/post')->group(function (){
        Route::get('/',[App\Http\Controllers\PostsController::class,'index'])->name('post');
    });
});
