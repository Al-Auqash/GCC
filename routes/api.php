<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PlayerController;

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
Route::get('/tournament', [TournamentController::class, 'client']);
Route::get('/tournament/finished', [TournamentController::class, 'finished']);

Route::post('/signUp', [PlayerController::class, 'createPlayer']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
