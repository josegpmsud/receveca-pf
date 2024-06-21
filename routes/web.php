<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuario', App\Http\Controllers\UsuarioController::class);
Route::resource('cliente', App\Http\Controllers\ClienteController::class);
Route::resource('vehiculo', App\Http\Controllers\VehiculoController::class);
Route::resource('plan', App\Http\Controllers\PlanController::class);
Route::resource('contrato', App\Http\Controllers\ContratoController::class);
Route::resource('rol', App\Http\Controllers\RolController::class);
Route::resource('marca', App\Http\Controllers\MarcaController::class);
Route::resource('tipo', App\Http\Controllers\TipoController::class);
Route::resource('uso', App\Http\Controllers\UsoController::class);
Route::resource('clase', App\Http\Controllers\ClaseController::class);
Route::resource('color', App\Http\Controllers\ColorController::class);
