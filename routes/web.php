<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalorieCalculatorController;
use App\Http\Controllers\BmiCalculatorController;

// Existing default route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/calorie-calculator', [CalorieCalculatorController::class, 'index']);
Route::get('/bmi-calculator', [BmiCalculatorController::class, 'index'])->name('bmi.index');
