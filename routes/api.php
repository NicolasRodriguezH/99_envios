<?php

use App\Http\Controllers\Api\V1\OwnGuideController;
use App\Http\Controllers\Api\V1\ShipmentController;
use App\Http\Controllers\Api\V1\StatusController;
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

// V1
Route::apiResource('v1/generate', OwnGuideController::class)/* ->names('generate') */;
Route::apiResource('v1/shipments', ShipmentController::class)/* ->names('shipments') */;


Route::apiResource('v1/status', StatusController::class);