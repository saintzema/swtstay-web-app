<?php

namespace App\Livewire\User;

use App\Models\Room;
use Livewire\Component;
use App\Models\HotelStaff;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

#[Layout('user-layout')]
class Dashboard extends Component
{
    public function mount()
    {
        // dd('mounted');
        // dd(auth()->user()->hotelStaff->branch->hotel->name);
    }

    public function render()
    {
        //
        $branchId = auth()->user()->hotelStaff ? '' : Auth::user()->hotelOwner->hotel->branches->pluck('id');
        return view('livewire.user.dashboard',[
            'branches' => auth()->user()->hotelStaff ? '' : auth()->user()->HotelOwner->hotel->branches->count(),
            'staffs' => auth()->user()->hotelStaff ? '' : HotelStaff::whereIn('branch_id', $branchId)->count(),
            'rooms' => auth()->user()->hotelStaff ? '' : Room::latest()->whereHas('branch.hotel', function ($query) {
                $query->where('hotel_owner_id', auth()->user()->hotelOwner->id);
            })->count()
        ]);
    }
}
