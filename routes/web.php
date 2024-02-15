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

Route::resource('apoderados','App\Http\Controllers\ApoderadoController')->names('apoderados');
Route::resource('alumnos','App\Http\Controllers\AlumnoController')->names('alumnos');
Route::resource('docentes','App\Http\Controllers\DocenteController')->names('docentes');
/*
Route::get('apoderados','App\Http\Controllers\ApoderadoController@index')->name('apoderado.index');
Route::get('apoderados/crear','App\Http\Controllers\ApoderadoController@create')->name('apoderado.create');

Route::get('apoderados/{ApoderadoID}/editar','App\Http\Controllers\ApoderadoController@edit')->name('apoderado.edit');
Route::patch('apoderados/{apoderados}','App\Http\Controllers\ApoderadoController@update')->name('apoderado.update');

Route::post('apoderados','App\Http\Controllers\ApoderadoController@store')->name('apoderado.store');
Route::get('apoderados/{ApoderadoID}','App\Http\Controllers\ApoderadoController@show')->name('apoderado.show');
Route::delete('apoderados/{apoderados}','App\Http\Controllers\ApoderadoController@destroy')->name('apoderado.destroy');
*/