<?php

use App\Http\Controllers\API\LevelController;
use App\Http\Controllers\API\MotorController as APIMotorController;
use App\Http\Controllers\MotorController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/motor', [APIMotorController::class, 'index']);
Route::get('/motor/create', [APIMotorController::class,'store']);
Route::get('/motor/{id}', [APIMotorController::class,'show']);
Route::post('/motor/create', [APIMotorController::class,'store']);
Route::delete('/motor/delete/{id}', [APIMotorController::class,'destroy']);
Route::put('/motor/update/{id}', [APIMotorController::class,'update']);

Route::get('/ambillevel', [LevelController::class, 'index']);