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

Route::get('/index', [App\Http\Controllers\FilmController::class, 'index']);

Auth::routes();

Route::get('/Films/index', [App\Http\Controllers\FilmController::class, 'index']);
Route::get('/Films/create', [App\Http\Controllers\FilmController::class, 'create']);
Route::post('/Films/store', [App\Http\Controllers\FilmController::class, 'store']);
Route::get('/Films/edit/{id}', [App\Http\Controllers\FilmController::class, 'edit']);
Route::post('/Films/update/{id}', [App\Http\Controllers\FilmController::class, 'update']);
Route::get('/Films/destroy{id}', [App\Http\Controllers\FilmController::class, 'destroy']);
Route::get('/Films/aj', [App\Http\Controllers\FilmController::class, 'aj']);
