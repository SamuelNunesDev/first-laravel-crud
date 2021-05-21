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

Route::resource('bonds','App\Http\Controllers\VinculosController');
Route::resource('employers', 'App\Http\Controllers\FuncionariosController');
Route::resource('positions','App\Http\Controllers\CargosController');
Route::resource('companys', 'App\Http\Controllers\EmpresasController');

Route::post('option', 'App\Http\Controllers\VinculosController@optionTable')->name('bonds.option');
