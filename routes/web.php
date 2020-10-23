<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipioController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/municipios', [MunicipioController::class, 'index']);
Route::get('/municipios/{id}', [MunicipioController::class, 'show']);
Route::put('/municipios/{id}/update', [MunicipioController::class, 'update']);