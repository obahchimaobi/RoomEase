<?php

namespace App\Livewire\Auth\Landlord;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

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

            $hash = md5($email);

            $resetPasswordLink = URL::temporarySignedRoute(
                'password.reset',
                now()->addMinutes(10),
                ['email' => $email, 'hash' => $hash],
            );

            Mail::to($email)->send(new \App\Mail\Landlord\LandlordResetPassword($name, $email, $hash, $resetPasswordLink));

            Toaster::success('A password reset link has been sent to your '.$email.'. Check your inbox.');
        }
    }

    public function render()
    {
        return view('livewire.auth.landlord.landlord-reset-password');
    }
}
