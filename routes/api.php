<?php

use App\Http\Controllers\Api\V1\DestinyController;
use App\Http\Controllers\Api\V1\OriginController;
use App\Http\Controllers\Api\V1\OriginDestinyController;
use App\Http\Controllers\Api\V1\OwnGuideController;
use App\Http\Controllers\Api\V1\ShipmentController;
use App\Http\Controllers\Api\V1\StatusController;
use App\Models\Origin;
use App\Models\StatusGuide;
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
Route::apiResource('v1/generate', OwnGuideController::class)->names('generate');
Route::apiResource('v1/shipments', ShipmentController::class)->names('shipments');

Route::apiResource('v1/status', StatusGuide::class)->names('status');

/* en caso de necesitarlo en front */
Route::apiResource('v1/origin_destiny', OriginDestinyController::class)->names('origin_destiny');
