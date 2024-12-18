<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;   
use App\Http\Controllers\VehicleController;


Route::get('/vehicles', [TemplateController::class, 'showVehicles'])->name('vehicles.index');

Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');

// Route for VehicleController - Delete a vehicle by ID
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

// Route for VehicleController to fetch total users and total vehicles
Route::get('/', [TemplateController::class, 'index'])->name('dashboard');