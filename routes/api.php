<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\userController;
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
//endpoint

//authenticated

Route::get('/equipo/listEquipo', [EquipoController::class, 'index'])
->middleware('auth');
Route::post('/login/create', [userController::class, 'create']);
Route::post('/login/signIn', [userController::class, 'login']);

Route::get('/equipo/list', [EquipoController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return "guig";
});
