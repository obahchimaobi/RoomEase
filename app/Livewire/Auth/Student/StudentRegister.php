<?php

namespace App\Livewire\Auth\Student;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class StudentRegister extends Component
{
    public $first_name;

    public $last_name;

    public $email;

    public $password;

    public $password_confirmation;

    public function student_register()
    {
        $validate = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $name = $validate['first_name'].' '.$validate['last_name'];

        User::create([
            'name' => $name,
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'email' => $validate['email'],
            'password' => $validate['password'],
            'role' => 'student',
        ]);

        // DB::table('student_profiles')->insert(['user_id' => ]);

        $email = $validate['email'];
        $hash = sha1($email);

        $verificationUrl = URL::temporarySignedRoute(
            'student.email.verify',
            now()->addMinutes(10),
            ['email' => $email, 'hash' => $hash],
        );

        Mail::to($email)->send(new \App\Mail\Student\StudentRegister($name, $email, $hash, $verificationUrl));

        return Redirect::route('student.login')->success('A confirmation email has been sent to '.$validate['email'].'. Click the verification link sent to your email to complete the verification process.');
    }

    public function render()
    {
        return view('livewire.auth.student.student-register');
    }
}
