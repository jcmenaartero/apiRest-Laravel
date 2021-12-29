<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\BoardgameController;

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

Route::get('boardgames', [BoardgameController::class, 'index']);
Route::post('boardgames/new', [BoardgameController::class, 'create']);
Route::get('boardgames/{boardgame}', [BoardgameController::class, 'show']);
Route::put('boardgames/{boardgame}', [BoardgameController::class, 'update']);
Route::delete('boardgames/{boardgame}', [BoardgameController::class, 'delete']);
