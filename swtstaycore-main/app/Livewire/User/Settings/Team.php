<?php

namespace App\Livewire\User\Settings;

use Livewire\Component;
use App\Models\HotelStaff;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('user-layout')]
class Team extends Component
{
    public $hotelStaffs;
    public function render()
    {
        // Get the currently logged-in hotel owner
        $user = Auth::user();

        //Get the currently logged-in hotel owner
        $hotelOwner = Auth::user()->hotelOwner;

        if ($hotelOwner) {
            // Get the hotel owned by the hotel owner
            $hotel = $hotelOwner->hotel;

            if ($hotel) {
                // Get the hotel branches
                $branches = $hotel->branches->pluck('id');

                // Fetch all hotel staff that belong to the hotel branches
                $this->hotelStaffs = HotelStaff::whereIn('branch_id', $branches)->get();

                // return $hotelStaffs;
            }
        }
        return view('livewire.user.settings.team', [
            'staffs' => $this->hotelStaffs
        ]);
    }
}
