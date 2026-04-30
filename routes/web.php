<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');
//DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Auth::routes();
//USER
Route::get('user', [UserController::class, 'index'])->name('user');

//TUGAS
Route::get('tugas', [TugasController::class, 'index'])->name('tugas');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');