<?php

namespace App\Livewire\User;

use App\Models\Room;
use App\Models\Branch;
use Livewire\Component;
use App\Models\HotelStaff;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Crypt;

#[Layout('user-layout')]
class BranchDetail extends Component
{
    public  $branchId;
    public  $branchDetail;

    public function mount(Branch $branch)
    {
        $this->branchDetail = $branch::findOrFail(Crypt::decryptString($this->branchId));
    }
    public function render()
    {
        // $branchId =  auth()->user()->hotelOwner->hotel->branches->pluck('id');
        return view('livewire.user.branch-detail', [
            'branch' => $this->branchDetail,
            'all_branches' => auth()->user()->HotelOwner->hotel->branches,
            'rooms' =>  Room::latest()->whereHas('branch.hotel', function ($query) {
                $query->where('hotel_owner_id', auth()->user()->hotelOwner->id);
            })->get(),
            // 'staffs' => HotelStaff::where('branch_id', $this->branchId)->get(),
            'staffs' => $this->branchDetail->hotelStaff,
        ]);
    }
}
