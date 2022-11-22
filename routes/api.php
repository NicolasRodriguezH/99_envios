<?php

use App\Http\Controllers\Api\V1\CotizationController;
use App\Http\Controllers\Api\V1\DestinyController;
use App\Http\Controllers\Api\V1\GuideMassiveExcelController;
use App\Http\Controllers\Api\V1\OriginController;
use App\Http\Controllers\Api\V1\OriginDestinyController;
use App\Http\Controllers\Api\V1\OwnGuideController;
use App\Http\Controllers\Api\V1\PdfController;
use App\Http\Controllers\Api\V1\ShipmentController;
use App\Http\Controllers\Api\V1\StatusGuideController;
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
Route::apiResource('v1/generate', OwnGuideController::class)
    ->names('generate');

Route::apiResource('v1/cotization', CotizationController::class)
    ->only('store')->names('cotization');

Route::post('v1/pdf_generate/{id}', [PdfController::class, 'generatePDF'])
    ->name('pdf_generate');

Route::apiResource('v1/shipments', ShipmentController::class)
    ->names('shipments');

Route::apiResource('v1/status', StatusGuideController::class)
    ->names('status');

/* En caso de necesitar agregar origen o destino desde interfaz */
Route::apiResource('v1/origin_destiny', OriginDestinyController::class)
    ->names('origin_destiny');

    // Ruta para crear la guia masiva
    /* Se puede llamar import tambien */
Route::post('v1/guide_massive', [GuideMassiveExcelController::class, 'createMassiveGuides'])
    ->name('guide_massive');