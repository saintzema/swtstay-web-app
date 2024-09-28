<?php

namespace App\Livewire\User\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('user-layout')]
class ApiKey extends Component
{
    public function render()
    {
        return view('livewire.user.settings.api-key');
    }
}
