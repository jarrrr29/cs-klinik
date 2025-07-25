<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Rute untuk tampilan login baru
Route::get('/login-new', function () {
    return view('auth.login');
})->name('login.new');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rute-rute ini adalah rute asli dari proyek Anda yang sudah ada.
|
*/
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/registrations', [DashboardController::class, 'store'])->name('registrations.store');
Route::put('/registrations/{registration}/status', [DashboardController::class, 'updateStatus'])->name('registrations.updateStatus');
Route::delete('/registrations/{registration}', [DashboardController::class, 'destroy'])->name('registrations.destroy');