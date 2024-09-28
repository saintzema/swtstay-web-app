<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('reg-layout')]
class Success extends Component
{
    public function mount()
    {
        // Check if the session variable exists, if not redirect to home page
        if (!session()->has('create_account_up')) {
            session()->flash('status', 'you have successfully create an account');
            $this->redirect(route('index'), navigate: true);
        }
        // Remove the session variable after the page is accessed
        session()->forget('create_account_up');
        $this->js(<<<'JS'
            confetti({
                particleCount: 400,
                spread: 90,
                origin: { y: 0.6 },
                // origin: { x: 1 },
            });
        JS);
    }
    public function render()
    {
        return view('livewire.auth.success');
    }
}
