<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GasStovesController;
use App\Http\Controllers\VacuumCleanersController;
use App\Http\Controllers\WashingMachinesController;
use App\Http\Controllers\FridgesController;
use App\Http\Controllers\DishwashersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/GasStoves',[GasStovesController::class,'GasStoves']);
Route :: get('/GasStoves/create',[GasStovesController::class,'create']);
Route :: post('/GasStoves/addGasStoves',[GasStovesController::class,'addGasStoves']);

//edame compare
Route::get('/GasStoves/compare', [GasStovesController::class, 'compare'])->name('GasStoves.compare');


Route :: get('/VacuumCleaners',[VacuumCleanersController::class,'VacuumCleaners']);
Route :: get('/VacuumCleaners/create1',[VacuumCleanersController::class,'create1']);
Route :: post('/VacuumCleaners/addVacuumCleaners',[VacuumCleanersController::class,'addVacuumCleaners']);

//edame compare
Route::get('/VacuumCleaners/compare', [VacuumCleanersController::class, 'compare'])->name('VacuumCleaners.compare');

Route::get('/WashingMachines',[WashingMachinesController::class,'WashingMachines']);
Route::get('/WashingMachines/create2',[WashingMachinesController::class,'create2']);
Route::post('/WashingMachines/addWashingMachines',[WashingMachinesController::class,'addWashingMachines']);

//edame compare
Route::get('/WashingMachines/compare', [WashingMachinesController::class, 'compare'])->name('WashingMachines.compare');


Route::get('/Fridges',[FridgesController::class,'Fridges']);
Route::get('/Fridges/create3',[FridgesController::class,'create3']);
Route::post('/Fridges/addFridges',[FridgesController::class,'addFridges']);

//edame compare
Route::get('/Fridges/compare', [FridgesController::class, 'compare'])->name('Fridges.compare');


Route::get('/Dishwashers',[DishwashersController::class,'Dishwashers']);
Route::get('/Dishwashers/create4',[DishwashersController::class,'create4']);
Route::post('/Dishwashers/addDishwashers',[DishwashersController::class,'addDishwashers']);

//edame compare
Route::get('/Dishwashers/compare', [DishwashersController::class, 'compare'])->name('Dishwashers.compare');