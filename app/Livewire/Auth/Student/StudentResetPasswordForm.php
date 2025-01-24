<?php

namespace App\Livewire\Auth\Student;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Url;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class StudentResetPasswordForm extends Component
{
    #[Url(as: 'token')]
    public $token = '';

    public $password;

    public $password_confirmation;

    public function student_reset_password()
    {
        $validate = $this->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $resetRequest = DB::table('password_reset_tokens')
            ->where('token', $this->token)
            ->first();

        if (! $resetRequest) {
            Toaster::error('Invalid or expired reset link.');

            return;
        }

        // update the user's password
        $user = User::where('email', $resetRequest->email)->firstOrFail();
        $user->password = Hash::make($this->password);
        $user->save();

        // Delete the token after successful reset
        DB::table('password_reset_tokens')->where('email', $resetRequest->email)->delete();

        return Redirect::route('student.login')->success('Your password has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.auth.student.student-reset-password-form');
    }
}
