<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

// Landlord Auth
Route::get('/register/landlord', [AuthController::class, 'landlord_register'])->name('landlord.register');
Route::get('/login/landlord', [AuthController::class, 'landlord_login'])->name('landlord.login');

// Student Auth
Route::get('/register/student', [AuthController::class, 'student_register'])->name('student.register');
Route::get('/login/student', [AuthController::class, 'student_login'])->name('student.login');