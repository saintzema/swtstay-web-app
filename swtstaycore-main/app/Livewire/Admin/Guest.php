<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('admin-layout')]
class Guest extends Component
{
    public function render()
    {
        return view('livewire.admin.guest');
    }
}
