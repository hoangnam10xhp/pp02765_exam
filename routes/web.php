<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/cars', [CarController::class, 'index'])->name('CarsIndex');
Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars/store', [CarController::class, 'store']);
Route::get('/cars/update/{id}', [CarController::class, 'edit']);
Route::post('/cars/update/{id}', [CarController::class, 'update']);
Route::get('/cars/delete/{id}', [CarController::class, 'destroy']);