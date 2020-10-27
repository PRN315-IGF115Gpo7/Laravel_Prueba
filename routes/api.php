<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\GrupoController;


Route::group([

    'middleware' => 'api',
    'prefix' => ''

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
    Route::post('signup', [AuthController::class, 'signup']);

});

Route::resource('salas', SalaController::class);

Route::resource('empleados', EmpleadoController::class);

Route::resource('puestos', PuestoController::class);

Route::resource('grupos', GrupoController::class);