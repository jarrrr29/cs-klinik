<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/register-patient', [DashboardController::class, 'store'])->name('register.patient');
Route::get('/', [DashboardController::class, 'index']);


