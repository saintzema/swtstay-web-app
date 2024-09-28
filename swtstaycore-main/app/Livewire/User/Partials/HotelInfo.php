<?php

namespace App\Livewire\User\Partials;

use Livewire\Component;

class HotelInfo extends Component
{
    public function mount(){
        dd(auth()->user()->HotelOwner->hotel->images);
    }
    public function render()
    {
        return view('livewire.user.partials.hotel-info', [
            'hotel' => auth()->user()->HotelOwner->hotel,
        ]);
    }
}
