<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PuestoController;


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

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