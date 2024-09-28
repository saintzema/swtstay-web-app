<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\URL;
use Illuminate\Auth\Events\Verified;

class VerifyEmail extends Component
{
    public function resendVerification(User $user)
    {
        if ($user->hasVerifiedEmail()) {
            session()->flash('status', 'Your email has been verified!');
            // TODO: REDIRECT TO USER OR ADMIN DASHBOARD
            $this->redirect(route('index'), navigate: true);
            die;
        }
        $user->sendEmailVerificationNotification();
        session()->flash('status', 'Verification link has been re-sent to your email');
    }

    public function verify($id, $hash)
    {
        if (!URL::hasValidSignature(request())) {
            abort(403, 'Invalid signature.');
        }

        $user = User::findOrFail($id);
        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            abort(403, 'Invalid signature.');
        }

        if ($user->hasVerifiedEmail()) {
            $this->redirect(route('index'), navigate: true);
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        return redirect()->route('index')->with('status', 'Your email has been verified!');
    }

    public function render()
    {
        return view('livewire.auth.verify-email');
    }
}
