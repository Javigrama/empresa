<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\DepartamentoController;

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
Route::get('sede', [SedeController::class, 'listarSedes']);
Route::get('all', [SedeController::class, 'index']);
Route::post('storeSede', [SedeController::class, 'store']);
Route::post('storeSedeFill', [Sedecontroller::class, 'storeFill']);
Route::post('dame', [Sedecontroller::class, 'dame']);

Route::get('dept',[DepartamentoController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
