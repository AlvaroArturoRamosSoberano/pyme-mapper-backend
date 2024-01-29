<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ColonyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FireExtinguisherDetailController;
use App\Http\Controllers\FireExtinguisherTypeController;
use App\Http\Controllers\FuelTypeController;
use App\Http\Controllers\GeographicDetailController;
use App\Http\Controllers\IncidentRecordController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InspectionRiskAspectController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RegulatoryAspectController;
use App\Http\Controllers\RegulatoryLicenseController;
use App\Http\Controllers\RegulatorySystemProtectionController;
use App\Http\Controllers\RiskAspectController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\SystemProtectionController;
use App\Http\Controllers\TankDetailController;
use App\Http\Controllers\TechnicalSheetController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('brands', BrandController::class);
Route::apiResource('cities', CityController::class);
Route::apiResource('colonies', ColonyController::class);
Route::apiResource('companies', CompanyController::class);
Route::apiResource('fire-extinguisher-details', FireExtinguisherDetailController::class);
Route::apiResource('fire-extinguisher-types', FireExtinguisherTypeController::class);
Route::apiResource('fuel-types', FuelTypeController::class);
Route::apiResource('geographic-details', GeographicDetailController::class);
Route::apiResource('incident-records', IncidentRecordController::class);
Route::apiResource('industries', IndustryController::class);
Route::apiResource('inspections', InspectionController::class);
Route::apiResource('inspection-risk-aspects', InspectionRiskAspectController::class);
Route::apiResource('licenses', LicenseController::class);
Route::apiResource('municipalities', MunicipalityController::class);
Route::apiResource('positions', PositionController::class);
Route::apiResource('regulatory-aspects', RegulatoryAspectController::class);
Route::apiResource('regulatory-licenses', RegulatoryLicenseController::class);
Route::apiResource('regulatory-system-protections', RegulatorySystemProtectionController::class);
Route::apiResource('risk-aspects', RiskAspectController::class);
Route::apiResource('states', StateController::class);
Route::apiResource('system-protections', SystemProtectionController::class);
Route::apiResource('tank-details', TankDetailController::class);
Route::apiResource('technical-sheets', TechnicalSheetController::class);
Route::apiResource('users', UserController::class);
