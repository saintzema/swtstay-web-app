<?php

namespace App\Livewire\User\Partials;

use App\Models\City;
use App\Models\State;
use App\Models\Branch;
use App\Models\Country;
use Livewire\Component;
use App\Enums\BranchStatus;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AddBranch extends Component
{

    public $countries;
    public $states = [];
    public $cities = [];

    public $address;
    public $city;
    public $state;
    public $country;
    public $zip_code;
    public $phone;
    public $email;
    public $longitude;
    public $latitude;
    public $map_url;
    public $amenities = ['Gym Area', 'Swimming Pool', 'Spa', 'Restaurant', 'Laundry', 'Golf Course', 'Club House'];
    public $currentAmenity = '';

    protected $rules = [
        'address' => 'required|string',
        'city' => 'required|integer',
        'state' => 'required|integer',
        'country' => 'required|integer',
        // 'amenities' => 'required|json',
        'amenities' => 'required|array',
        'amenities.*' => 'string',
        'zip_code' => 'nullable|string|max:10',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'longitude' => 'nullable|string|max:255',
        'latitude' => 'nullable|string|max:255',
        'map_url' => 'nullable|url|max:255',
    ];


    public function addAmenity($amenity)
    {
        $amenity = trim($amenity);
        // Only add the amenity if it's not empty and not already in the list
        if (!empty($amenity) && !in_array($amenity, $this->amenities)) {
            $this->amenities[] = $amenity;
        }
        $this->currentAmenity = '';
    }

    public function removeAmenity($index)
    {
        unset($this->amenities[$index]);
        $this->amenities = array_values($this->amenities);
    }

    public function mount()
    {
        $this->countries = Country::whereActive(true)->get();
    }

    public function updatedCountry($countryId)
    {
        $this->states = State::whereCountryId($countryId)->whereActive(true)->get();
        $this->state = null;
        $this->cities = [];
    }

    public function updatedState($stateId)
    {
        $this->cities = City::whereStateId($stateId)->whereActive(true)->get();
        $this->city = null;
    }

    public function submit()
    {
        // validate the data first
        $this->validate();
        // get the authenticated hotel owner
        $hotelOwner = Auth::user()->hotelOwner;

        $countryName = Country::find($this->country)->name ?? null;
        $stateName = State::find($this->state)->name ?? null;
        $cityName = City::find($this->city)->name ?? null;

        $hotelOwner->hotel->branches()->create([
            'name' => Str::slug($hotelOwner->hotel->name)."/". $cityName,
            'address' => $this->address,
            'city' => $cityName,
            'state' => $stateName,
            'country' => $countryName,
            'status' => BranchStatus::PENDING->value,
            'amenities' => json_encode($this->amenities),
            'zip_code' => $this->zip_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'map_url' => $this->map_url,
        ]);

        // update the the hotel owner branch status only if this is there first branch
        if ($hotelOwner->hotel->branches->count() == 1) {
            $hotelOwner->update(['is_branch_added' => true]);
        }
        $this->dispatch('close-add-branch-drawer');
        session()->flash('success', 'Branch has been successfully created.');
        $this->reset();
        $this->redirect(route('index'),  true);
    }
    public function render()
    {
        return view('livewire.user.partials.add-branch');
    }
}
