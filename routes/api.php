<?php

use App\Http\Controllers\Api\V1\OwnGuideController;
use App\Http\Controllers\Api\V1\ShipmentController;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

// V1
Route::apiResource('v1/bogota_bogota', OwnGuideController::class)
    ->only('store');

Route::apiResource('v1/envios', ShipmentController::class);