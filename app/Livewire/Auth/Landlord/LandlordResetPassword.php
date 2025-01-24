<?php

namespace App\Livewire\Auth\Landlord;

use App\Models\User;
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

        if (!$check_email) {
            Toaster::error('Email does not exist!');

            $this->reset(['email']);
        }
    }
    public function render()
    {
        return view('livewire.auth.landlord.landlord-reset-password');
    }
}
