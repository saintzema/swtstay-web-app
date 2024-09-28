<?php

namespace App\Livewire\User\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('user-layout')]
class Profile extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;


    public function mount()
    {
        $this->firstName = auth()->user()->first_name;
        $this->lastName = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        // dd(auth()->user()->first_name);
    }

    public function save()
    {
        // sleep(4);
        $this->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15|unique:users,phone,' . auth()->id(),
        ]);
        auth()->user()->update([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'phone' => $this->phone,
        ]);

        session()->flash('success', 'Profile was updated successfully.');
        $this->redirect(route('user.settings.profile'),  true);

    }

    public function render()
    {
        return view('livewire.user.settings.profile');
    }
}
