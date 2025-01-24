<?php

namespace App\Livewire\Auth\Student;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class StudentResetPassword extends Component
{
    public $email;

    public function student_reset_password()
    {
        $validate = $this->validate([
            'email' => 'required|email',
        ]);

        $check_email = User::where('email', $validate['email'])->first();

        if (! $check_email) {
            Toaster::error('Email does not exist!');

            $this->reset(['email']);
        } else {
            $name = $check_email->name;

            $email = $check_email->email;

            $token = Str::random(40);

            // Store token in password_resets table
            DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $check_email->email],
                ['token' => $token, 'created_at' => now()]
            );

            $resetPasswordLink = URL::temporarySignedRoute(
                'student.password.reset',
                now()->addMinutes(5),
                ['token' => $token],
            );

            Mail::to($email)->send(new \App\Mail\Student\StudentResetPassword($name, $email, $resetPasswordLink));

            Toaster::success('A password reset link has been sent to your '.$email.'. Check your inbox.');

            $this->reset(['email']);
        }
    }

    public function render()
    {
        return view('livewire.auth.student.student-reset-password');
    }
}
