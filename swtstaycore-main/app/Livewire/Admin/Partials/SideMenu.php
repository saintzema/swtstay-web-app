<?php

namespace App\Livewire\Admin\Partials;

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
        return view('livewire.admin.partials.side-menu');
    }
}
