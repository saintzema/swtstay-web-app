<?php

namespace App\Livewire\User;

use App\Models\Branch;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

#[Layout('user-layout')]
class Hotel extends Component
{
    // #[Url(as: 'branch')]
    // public $selectedBranch;

    public function branchDetail($value)
    {
        $this->redirect(route('user.branch.detail', Crypt::encryptString($value)), navigate: true);
    }

    public function render()
    {
        $hotel = auth()->user()->HotelOwner->hotel;

        $images = collect($hotel->images)->map(function ($image) {
            // return Storage::url($image);
            return $image;
        })->toArray();

        return view('livewire.user.hotel',[
            'hotel' => auth()->user()->HotelOwner->hotel,
            'images' => $images
        ]);
    }
}
