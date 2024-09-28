<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('reg-layout')]
class SetupSuccess extends Component
{
    public function mount()
    {
        // Check if the session variable exists, if not redirect to home page
        if (!session()->has('setup_done')) {
            $this->redirect(route('index'), navigate: true);
        }
        // Remove the session variable after the page is accessed
        session()->forget('setup_done');
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
        return view('livewire.auth.setup-success');
    }
}
