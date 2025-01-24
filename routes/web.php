<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

// Landlord Auth
Route::get('/register/landlord', [AuthController::class, 'landlord_register'])->name('landlord.register');
Route::get('/login/landlord', [AuthController::class, 'landlord_login'])->name('landlord.login');

Route::get('/landlord/email/verify/{email}/{hash}', function ($email, $hash) {
    $user = User::where('email', $email)->firstOrFail();

    if (! hash_equals(sha1($user->email), $hash)) {
        abort(403, 'Invalid verification link.');
    }

    if ($user->email_verified_at) {
        return Redirect::route('landlord.login')->error('Your email has already been verified.');
    }

    // $user->update(['email_verified_at' => now()]);
    $user->email_verified_at = now();
    $user->save();

    return Redirect::route('landlord.login')->success('Your email has been successfully verified.');
})->middleware('signed')->name('landlord.email.verify');

Route::get('/student/email/verify/{email}/{hash}', function ($email, $hash) {
    $user = User::where('email', $email)->firstOrFail();

    if (! hash_equals(sha1($user->email), $hash)) {
        abort(403, 'Invalid verification link.');
    }

    if ($user->email_verified_at) {
        return Redirect::route('student.login')->error('Your email has already been verified.');
    }

    // $user->update(['email_verified_at' => now()]);
    $user->email_verified_at = now();
    $user->save();

    return Redirect::route('student.login')->success('Your email has been successfully verified.');
})->middleware('signed')->name('student.email.verify');

// Student Auth
Route::get('/register/student', [AuthController::class, 'student_register'])->name('student.register');
Route::get('/login/student', [AuthController::class, 'student_login'])->name('student.login');