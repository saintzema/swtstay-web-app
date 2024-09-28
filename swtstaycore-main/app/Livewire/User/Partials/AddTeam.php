<?php

namespace App\Livewire\User\Partials;

use App\Models\User;
use Livewire\Component;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class AddTeam extends Component
{
    public $firstName;
    public $lastName;
    public $emailAddress;
    public $role;
    public $branchId;
    public $password;

    // Validation rules
    protected $rules = [
        'firstName' => 'required|string|min:2',
        'lastName' => 'required|string|min:2',
        'emailAddress' => 'required|email|unique:users,email',
        'role' => 'required|string',
        'branchId' => 'required|exists:branches,id',
        'password' => 'required|min:8',
    ];

    // Save method to handle form submission
    public function save()
    {
        // Validate inputs
        $this->validate();

        // Create the user (staff)
        $newStaff = User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->emailAddress,
            'role' => UserRoles::HOTEL_STAFF->value,
            // 'branch_id' => $this->branchId,
            'status' => UserStatus::PENDING->value,
            'password' => Hash::make($this->password),
        ]);

        // create the staff
        $newStaff->hotelStaff()->create([
            'branch_id' => $this->branchId,
            'role' => $this->role,
        ]);

        $this->dispatch('close-add-team-modal');
        // Success message or redirect
        session()->flash('message', 'Staff added successfully.');
        // Reset form inputs after saving
        $this->reset();
        $this->redirect(route('user.settings.team'),  true);
    }

    public function render()
    {
        return view('livewire.user.partials.add-team',[
            'branches' => auth()->user()->HotelOwner->hotel->branches,
        ]);
    }
}
