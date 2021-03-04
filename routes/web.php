<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ClosetController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ChainsawController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'vehicles' => VehicleController::class,
    'closets' => ClosetController::class,
    'mesas' => MesaController::class,
    'houses' => HouseController::class,
    'chainsaws' => ChainsawController::class
]);