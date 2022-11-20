<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\HumidityController;
use App\Http\Controllers\SoilMoistureController;
use App\Http\Controllers\NpkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/",[PlantController::class,'getPlantParameters'])->name('getPlantParameters');
Route::get('alerts', function () {
    return view('alerts');
});
Route::get("temperature",[TemperatureController::class,'getTemperature'])->name('getTemperature');
Route::get("temperature",[TemperatureController::class,'getTemperature'])->name('getTemperature');
Route::get("humidity",[HumidityController::class,'getHumidity'])->name('getHumidity');
Route::get("soilMoisture",[SoilMoistureController::class,'getSoilMoisture'])->name('getSoilMoisture');
Route::get("nitrogen",[NpkController::class,'getNitrogen'])->name('getNitrogen');
Route::get("phosphorus",[NpkController::class,'getPhosphorus'])->name('getPhosphorus');
Route::get("potassium",[NpkController::class,'getPotassium'])->name('getPotassium');