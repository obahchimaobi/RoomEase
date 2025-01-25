<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Landlord\LandlordController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

/*
START LANDLORD ROUTES

This beginning of this route is for handling all landlord routes
*/
Route::get('/register/landlord', [AuthController::class, 'landlord_register'])->name('landlord.register')->middleware(['RedirectLandlord']);
Route::get('/login/landlord', [AuthController::class, 'landlord_login'])->name('landlord.login');
Route::get('/forgot-password/landlord', [AuthController::class, 'landlord_reset_password'])->name('landlord.forgot.password');

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

// Landlord Reset Password Link
Route::get('/landlord/reset/password', function () {
    // get the token from the url
    $token = request()->query('token');

    $request_token = DB::table('password_reset_tokens')->where('token', $token)->first();

    if (! $request_token) {
        abort(403);

        return;
    }

    return view('email.landlord.reset-password-form');
})->middleware('signed')->name('landlord.password.reset');

// Landlord Dashboard
Route::group(['middleware' => 'LandlordIsLoggedin', 'IsLandlord'], function () {
    Route::get('/landlord/dashboard', [LandlordController::class, 'landlord_dashboard'])->name('landlord.dashboard');

});

Route::get('/landlord/logout', function () {
    Auth::logout();

    return Redirect::route('home')->success('You have been logged out!');
})->name('landlord.logout');

/*
END LANDLORD ROUTES

This is the ending here
*/

/*
START STUDENT ROUTES

This beginning of this route is for handling all students routes
*/
Route::get('/register/student', [AuthController::class, 'student_register'])->name('student.register');
Route::get('/login/student', [AuthController::class, 'student_login'])->name('student.login');
Route::get('/forgot-password/student', [AuthController::class, 'student_reset_password'])->name('student.forgot.password');

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

// Studente Reset Password Link
Route::get('/student/reset/password', function () {
    // get the token from the url
    $token = request()->query('token');

    $request_token = DB::table('password_reset_tokens')->where('token', $token)->first();

    if (! $request_token) {
        abort(403);

        return;
    }

    return view('email.student.student-reset-password-form');
})->middleware('signed')->name('student.password.reset');

/*
END STUDENT ROUTES

This is the ending
*/
