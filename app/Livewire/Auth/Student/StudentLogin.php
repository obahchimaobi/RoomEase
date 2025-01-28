<?php

namespace App\Livewire\Auth\Student;

use App\Models\User;
use Livewire\Component;
use Masmerise\Toaster\Toaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class StudentLogin extends Component
{
    public $email;

    public $password;

    public $remember_me = false;

    public function student_login()
    {
        $validate= $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $validate['email'])->first();

        if (! $user) {
            Toaster::error('Incorrect email or password!');

            $this->reset(['email', 'password']);

            return;
        }

        if (is_null($user->email_verified_at)) {
            Toaster::error('Your email address is not verified!');

            return;
        }

        if (! Hash::check($validate['password'], $user->password)) {

            Toaster::error('The password you entered is not correct!');

            $this->reset(['password']);

            return;
        }

        if ($user && $user->role != 'student') {
            Toaster::error('This email is for a landlord');
            $this->reset(['email', 'password']);

            return;
        }

        // Login the user if all checks pass
        $remember = $this->remember_me ?? false;
        Auth::login($user, $remember);

        return Redirect::route('student.dashboard')->success('Welcome back '.$user->name);
    }

    public function render()
    {
        return view('livewire.auth.student.student-login');
    }
}
