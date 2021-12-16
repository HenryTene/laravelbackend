<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/usuarios','App\Http\Controllers\UsuarioController@index');//Mostrar todos los registros
Route::post('/usuarios','App\Http\Controllers\UsuarioController@store');//crear un registro
Route::put('/usuarios/{id}','App\Http\Controllers\UsuarioController@update');//Actualiza un registro
Route::delete('/usuarios/{id}','App\Http\Controllers\UsuarioController@destroy');//Borra un registro