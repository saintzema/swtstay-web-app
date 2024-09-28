<?php

namespace App\Livewire\User\Partials;

use App\Actions\Logout;
use Livewire\Component;

class SideMenu extends Component
{

    protected $logoutAction;
    public function __construct()
    {
        $this->logoutAction = new Logout();
    }

    public function logout()
    {
        ($this->logoutAction)();
        $this->redirect(route('login'), navigate: true);
    }


    public function render()
    {
        return view('livewire.user.partials.side-menu');
    }
}
