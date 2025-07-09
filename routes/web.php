<?php

use App\Http\Controllers\ApproverController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FuelUsageController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookingReportController;
use App\Models\FuelUsage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UsersController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('vehicles', VehiclesController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('fuelusages', FuelUsageController::class);

    Route::get('/approver', [ApproverController::class, 'index'])->name('approver.index');
    Route::get('/approver/{booking}', [ApproverController::class, 'show'])->name('approver.show');
    Route::get('/approver/{booking}/edit', [ApproverController::class, 'edit'])->name('approver.edit');
    Route::put('/approver/{booking}', [ApproverController::class, 'update'])->name('approver.update');

    Route::get('/booking_report', [BookingReportController::class, 'index'])->name('booking-reports.index');
    Route::get('/booking_report/export', [BookingReportController::class, 'export'])->name('booking-reports.export');

});

require __DIR__.'/auth.php';
