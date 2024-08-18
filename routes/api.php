<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;

Route::get('cars/', [CarController::class,'index'])->name('cars.index');
Route::post('cars/store', [CarController::class,'store'])->name('cars.store');
Route::get('cars/show/{id}', [CarController::class,'show'])->name('cars.show');
Route::post('cars/update/{id}', [CarController::class,'update'])->name('cars.update');
Route::get('cars/destroy/{id}', [CarController::class,'destroy']);
