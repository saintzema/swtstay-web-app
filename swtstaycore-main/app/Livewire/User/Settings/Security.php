<?php

namespace App\Livewire\User\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

#[Layout('user-layout')]
class Security extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_password;

    public function updatePassword()
    {
        // Validate the inputs
        $this->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
            'confirm_password' => ['required', 'same:new_password'],
        ]);

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($this->new_password),
        ]);

        // Clear input fields after successful update
        $this->reset();
        // Show success message
        session()->flash('success', 'Password changed successfully!');
        $this->redirect(route('user.settings.security'), true);
    }

    public function render()
    {
        return view('livewire.user.settings.security');
    }
}
