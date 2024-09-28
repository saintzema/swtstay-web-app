<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Room as ModelsRoom;
use Illuminate\Support\Facades\Auth;

#[Layout('user-layout')]
class Room extends Component
{
    public $rooms;

    public function render()
    {
        $currentUser = Auth::user();

        // if the current user is a hotel owner
        if($currentUser->hotelOwner)
        {
            $this->rooms =  ModelsRoom::latest()->whereHas('branch.hotel', function ($query) use ($currentUser) {
                $query->where('hotel_owner_id', $currentUser->hotelOwner->id);
            })->get();
        }

        // if the current user is a hotel staff
        if ($currentUser->hotelStaff) {
            $this->rooms =  ModelsRoom::latest()->whereHas('branch', function ($query) use ($currentUser) {
                $query->whereHas('hotelStaff', function ($subQuery) use ($currentUser) {
                    $subQuery->where('user_id', $currentUser->id);
                });
            })->get();
        }

        return view('livewire.user.room',[
            'rooms' => $this->rooms
        ]);
    }
}
