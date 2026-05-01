<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');

// AUTH
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('login.proses');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// PROTECTED ROUTES
Route::middleware('checkLogin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
});