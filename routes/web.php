<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;

// Rutas para mostrar la lista de cuartos y el formulario de creación
Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('rooms/create', [RoomController::class, 'create'])->name('rooms.create');

// Rutas para guardar, editar, actualizar y eliminar cuartos
Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');
//Rutas del inicio 
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Reservas
Route::get('bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
Route::delete('bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');
Auth::routes();
