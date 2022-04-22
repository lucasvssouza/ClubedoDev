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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product-list', [App\Http\Controllers\ListController::class , 'index'])->name('product-list');
Route::get('/product-create', [App\Http\Controllers\CreateController::class , 'index']);
Route::get('/product-edit', [App\Http\Controllers\EditController::class , 'index']);
Route::get('/product-edit', [App\Http\Controllers\Auth\LoginController::class , 'index']);