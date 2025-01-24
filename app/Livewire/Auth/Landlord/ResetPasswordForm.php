<?php

namespace App\Livewire\Auth\Landlord;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Url;
use Masmerise\Toaster\Toaster;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class ResetPasswordForm extends Component
{
    #[Url(as: 'token')]
    public $token = '';

    public $password;

    public $password_confirmation;

    public function landlord_reset_password()
    {
        $validate = $this->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $resetRequest = DB::table('password_reset_tokens')
            ->where('token', $this->token)
            ->first();

        if (!$resetRequest) {
            Toaster::error('Invalid or expired reset link.');
            return;
        }

        // update the user's password
        $user = User::where('email', $resetRequest->email)->firstOrFail();
        $user->password = Hash::make($this->password);
        $user->save();

        // Delete the token after successful reset
        DB::table('password_reset_tokens')->where('email', $resetRequest->email)->delete();

        return Redirect::route('landlord.login')->success('Your password has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.auth.landlord.reset-password-form');
    }
}
