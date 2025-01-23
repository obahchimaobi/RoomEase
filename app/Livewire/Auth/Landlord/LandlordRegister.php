<?php

namespace App\Livewire\Auth\Landlord;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Masmerise\Toaster\Toaster;
use Illuminate\Support\Facades\Mail;

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
        
        $email = $validate['email'];
        $hash = sha1($email);

        $verificationUrl = URL::temporarySignedRoute(
            'landlord.email.verify',
            now()->addMinutes(10),
            ['email' => $email, 'hash' => $hash],
        );

        Mail::to($validate['email'])->send(new \App\Mail\Landlord\LandlordRegister($name, $email, $hash, $verificationUrl));

        return Redirect::route('landlord.login')->success('A confirmation email has been sent to '.$validate['email'].'. Click the verification link sent to your email to complete the verification process.');
    }

    public function render()
    {
        return view('livewire.auth.landlord.landlord-register');
    }
}
