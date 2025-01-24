<?php

namespace App\Livewire\Auth\Landlord;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

class LandlordResetPassword extends Component
{
    public $email;

    public function landlord_reset_password()
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
                'password.reset',
                now()->addMinutes(5),
                ['token' => $token],
            );

            Mail::to($email)->send(new \App\Mail\Landlord\LandlordResetPassword($name, $email,$resetPasswordLink));

            Toaster::success('A password reset link has been sent to your '.$email.'. Check your inbox.');

            $this->reset(['email']);
        }
    }

    public function render()
    {
        return view('livewire.auth.landlord.landlord-reset-password');
    }
}
