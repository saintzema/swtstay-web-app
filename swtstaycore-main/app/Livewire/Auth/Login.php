<?php

namespace App\Livewire\Auth;

use App\Enums\UserRoles;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

#[Layout('auth-layout')]
class Login extends Component
{
    #[Validate('required|email|exists:users,email')]
    public $email;

    #[Validate('required')]
    public $password;

    public $remember = false;

    public function attemptLogin()
    {
        // $this->js("alert('hello world');");
        $credentials = $this->validate();

        // Handle the email check logic
        if (session()->has('message')) {
            session()->forget('message');
        }
        // perform the login attempt
        if (Auth::attempt($credentials, $this->remember)) {
            session()->regenerate();
            Auth::user()->role === UserRoles::ADMIN->value
                ? $this->redirectIntended(Route('admin.dashboard'), navigate: true)
                : $this->redirectIntended(Route('index'), navigate: true);
        } else {
            $this->addError('email', 'Invalid email & password combination.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
