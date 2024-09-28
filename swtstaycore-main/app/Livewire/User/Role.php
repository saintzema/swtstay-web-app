<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('user-layout')]
class Role extends Component
{
    public function render()
    {
        return view('livewire.user.role');
    }
}
