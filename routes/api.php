<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\BoardgameController;
use App\Http\Controllers\API\AutenticateController;
use App\Http\Controllers\API\ExpansionController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::apiResource('boardgames', BoardgameController::class);*/

//PUBLIC ROUTES
Route::get('boardgames', [BoardgameController::class, 'index']);
Route::get('boardgames/{boardgame}', [BoardgameController::class, 'show']);

Route::get('expansions', [ExpansionController::class, 'index']);
Route::get('expansions/{expansion}', [ExpansionController::class, 'show']);

Route::post('user/register', [AutenticateController::class, 'register']);
Route::post('user/login', [AutenticateController::class, 'login']);

//PRIVATE ROUTES
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('user', [AutenticateController::class, 'getUser']);
    Route::post('user/logout', [AutenticateController::class, 'logout']);
    Route::middleware('rolecheck')->group(function (){
        Route::post('boardgames/new', [BoardgameController::class, 'create']);
        Route::put('boardgames/{boardgame}', [BoardgameController::class, 'update']);
        Route::delete('boardgames/{boardgame}', [BoardgameController::class, 'delete']);
    });
});