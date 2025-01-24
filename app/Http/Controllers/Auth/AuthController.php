<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //
    public function landlord_register()
    {
        return view('auth.landlord.landlord-register');
    }

    public function landlord_login()
    {
        return view('auth.landlord.landlord-login');
    }

    public function landlord_reset_password()
    {
        return view('auth.landlord.landlord-reset-password');
    }

    public function student_register()
    {
        return view('auth.student.student-register');
    }

    public function student_login()
    {
        return view('auth.student.student-login');
    }

    public function student_reset_password()
    {
        return view('auth.student.student-reset-password');
    }
}
