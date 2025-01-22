<?php

namespace App\Livewire\Auth\Landlord;

use App\Models\User;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class LandlordRegister extends Component
{
    public $first_name;

    public $last_name;

    public $email;

    public $password;

    public $password_confirmation;

    public function landlord_register()
    {
        $validate = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $name = $validate['first_name'] . ' ' . $validate['last_name'];

        User::create([
            'name' => $name,
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'email' => $validate['email'],
            'password' => $validate['password'],
            'type' => 'landlord',
        ]);

        Toaster::success('Registration successful!');
    }

    public function render()
    {
        return view('livewire.auth.landlord.landlord-register');
    }
}
