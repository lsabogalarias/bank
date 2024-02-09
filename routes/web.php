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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', 'App\Http\Controllers\ClienteController@successfull')->name('clientes.successfull');
Route::get('/cuentas/saldoscuentas', 'App\Http\Controllers\CuentaController@consultaSaldoCuenta')->name('cuentas.saldoscuentas');
Route::get('/cuentas/movimientos', 'App\Http\Controllers\CuentaController@consultaMovimientos')->name('cuentas.movimientos');
Route::get('/cuentas/extractos', 'App\Http\Controllers\CuentaController@generarExtractoMensual')->name('cuentas.extractos');
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store')->name('clientes.store');
//Route::get('/cuentas/consulta/saldos', 'App\Http\Controllers\CuentaController@consultaSaldo')->name('cuentas.consulta.saldos');
Route::post('/cuentas/consulta/saldos', 'App\Http\Controllers\CuentaController@consultaSaldo')->name('cuentas.consulta.saldos');
Route::get('/cuentas/saldos', 'App\Http\Controllers\CuentaController@consultaSaldoCuenta')->name('cuentas.saldos');




