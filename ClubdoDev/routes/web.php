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
Auth::routes();

Route::get('/', [App\Http\Controllers\ListController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\ListController::class , 'index']);

Route::get('/list-product', [App\Http\Controllers\ListController::class , 'index']);
Route::get('/create-product', [App\Http\Controllers\CreateController::class , 'index']);
Route::get('/edit-product/{id}', [App\Http\Controllers\EditController::class , 'index']);

Route::post('/edit-product/submit', [App\Http\Controllers\EditController::class , 'editProduct'])->name('editProduct');

Route::post('/create-product/submit', [App\Http\Controllers\CreateController::class , 'newProduct'])->name('newProduct');



Route::get('/create-product/submit', [App\Http\Controllers\CreateController::class , 'index']);