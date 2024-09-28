<?php

namespace App\Livewire\User;

use App\Models\Room;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('user-layout')]
class OccupiedRoom extends Component
{
    public $rooms;

    public function render()
    {
        $currentUser = Auth::user();

        // if the current user is a hotel owner
        if ($currentUser->hotelOwner) {
            $this->rooms =  Room::latest()->whereAvailability(false)->whereHas('branch.hotel', function ($query) use ($currentUser) {
                $query->where('hotel_owner_id', $currentUser->hotelOwner->id);
            })->get();
        }

        // if the current user is a hotel staff
        if ($currentUser->hotelStaff) {
            $this->rooms =  Room::latest()->whereAvailability(false)->whereHas('branch', function ($query) use ($currentUser) {
                $query->whereHas('hotelStaff', function ($subQuery) use ($currentUser) {
                    $subQuery->where('user_id', $currentUser->id);
                });
            })->get();
        }
        return view('livewire.user.occupied-room', [
            'rooms' => $this->rooms
        ]);
    }
}
