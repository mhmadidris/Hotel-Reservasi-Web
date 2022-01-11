<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyBookingController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\AdminController;


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

Route::get('/masuk', function () {
    return view('frontend.masuk');
});

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Reservasi Kamar
Route::get('/reservasi', [ReservasiController::class, 'index'], [ReservasiController::class, 'show'])->middleware(['auth'])->name('reservasi');
Route::post('/reservasi/store', [ReservasiController::class, 'store'])->middleware(['auth']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Admin
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('admin');

// MyBooking
Route::get('/mybooking', [MyBookingController::class, 'index'])->middleware(['auth'])->name('mybooking');
Route::get('/mybooking', [MyBookingController::class, 'show'])->middleware(['auth'])->name('mybooking');
Route::get('/mybooking/invoice/{id}/download', [MyBookingController::class, 'pdfview']);

// Riwayat
Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware(['auth'])->name('riwayat');

// Tamu
Route::get('/tamu', [ReservasiController::class, 'index'])->middleware(['auth'])->name('tamu');
Route::get('/tamu/edit/{id}', [ReservasiController::class, 'edit'])->middleware(['auth']);
Route::post('/tamu/update', [ReservasiController::class, 'update'])->middleware(['auth']);
Route::get('/tamu/hapus/{id}', [ReservasiController::class, 'destroy'])->middleware(['auth']);
Route::get('/reservasi/cari', [ReservasiController::class, 'cari'])->middleware(['auth']);

//Rooms
Route::get('/rooms', [RoomController::class, 'index'])->middleware(['auth'])->name('rooms');
Route::get('/rooms/edit/{id}', [RoomController::class, 'edit'])->middleware(['auth']);
Route::post('/rooms/update', [RoomController::class, 'update'])->middleware(['auth']);
Route::get('/rooms/hapus/{id}', [RoomController::class, 'destroy'])->middleware(['auth']);
Route::get('/room/input', function () {
    return view('backend.rooms.input');
});
Route::get('/rooms/store', [RoomController::class, 'store'])->middleware(['auth']);


require __DIR__.'/auth.php';
