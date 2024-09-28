<?php

namespace App\Livewire\User\Partials;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Hotel as ModelsHotel;

class UpdateHotel extends Component
{
    use WithFileUploads;
    // hotel model data
    public $hotel;

    public $hotel_name;
    public $max_price;
    public $min_price;
    public $description;

    public $imageFiles = [];
    public function mount(ModelsHotel $hotel)
    {
        $this->hotel = $hotel;
        $this->hotel_name = $hotel->name;
        $this->max_price = $hotel->max_price;
        $this->min_price = $hotel->min_price;
        $this->description = $hotel->description;
    }
    public function render()
    {
        return view('livewire.user.partials.update-hotel');
    }
}
