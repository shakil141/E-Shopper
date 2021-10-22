<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\HomeConroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenufactureController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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


// Frontend Site Route Start...........................................
Route::get('/',[HomeController::class,'index'])->name('home');










// Frontend Site Route End..................................

// Backend Site Route Start....................................
Route::get('/backend',[App\Http\Controllers\Backend\HomeConroller::class,'login'])->name('login');
Route::post('/admin-dashboard',[App\Http\Controllers\Backend\HomeConroller::class,'login_success'])->name('login_success');
Route::get('/logout',[App\Http\Controllers\Backend\HomeConroller::class,'logout'])->name('logout');
Route::get('/dashboard',[App\Http\Controllers\Backend\HomeConroller::class,'dashboard'])->name('dashboard');




// catgory realated route..............................
Route::resource('categories',CategoryController::class);
// catgory realated route..............................

// Menufacture realated route..............................
Route::resource('menufacture',MenufactureController::class);
// Menufacture realated route..............................

// Product realated route..............................
Route::resource('products',ProductController::class);
// Product realated route..............................


// Some One Realated Route......................
Route::get('un-active/{category}',[App\Http\Controllers\SomeController::class,'unactive'])->name('un_active');
Route::get('active/{category}',[App\Http\Controllers\SomeController::class,'active'])->name('active');

Route::get('un-active-brand/{menufacture}',[App\Http\Controllers\SomeController::class,'unactivebrand'])->name('unactive.brand');
Route::get('active-brand/{menufacture}',[App\Http\Controllers\SomeController::class,'activebrand'])->name('active.brand');
// Backend Site Route End....................................
