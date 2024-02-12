<?php

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

Route::view('/','home');
Route::get('apoderados','App\Http\Controllers\ApoderadoController@index')->name('apoderado.index');
Route::get('apoderados/{ApoderadoID}','App\Http\Controllers\ApoderadoController@show')->name('apoderado.show');