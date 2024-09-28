<?php

namespace App\Livewire\User\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('user-layout')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.user.settings.contact');
    }
}
