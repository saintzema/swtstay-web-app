<?php

namespace App\Livewire\User\Partials;

use App\Models\City;
use App\Models\State;
use App\Models\Branch;
use App\Models\Country;
use Livewire\Component;
use App\Enums\BranchStatus;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

#[Layout('user-layout')]
class EditBranch extends Component
{
    public $branch;
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
    public $amenities = [];
    public $currentAmenity = '';

    protected $rules = [
        'address' => 'required|string',
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
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

    public function mount(Branch $branch)
    {
        $this->branch = $branch;
        $this->address = $this->branch->address;
        $this->city = $this->branch->city;
        $this->state = $this->branch->state;
        $this->country = $this->branch->country;
        $this->zip_code = $this->branch->zip_code;
        $this->phone = $this->branch->phone;
        $this->email = $this->branch->email;
        $this->longitude = $this->branch->longitude;
        $this->latitude = $this->branch->latitude;
        $this->map_url = $this->branch->map_url;
        $this->amenities = json_decode($this->branch->amenities);

        // Load countries
        $this->countries = Country::whereActive(true)->get();

        // Prefill states and cities based on the stored names
        if ($this->country) {
            // Load states based on the country name
            $country = Country::where('name', $this->country)->first();
            if ($country) {
                $this->states = State::where('country_id', $country->id)->whereActive(true)->get();
            }
        }

        if ($this->state) {
            // Load cities based on the state name
            $state = State::where('name', $this->state)->first();
            if ($state) {
                $this->cities = City::where('state_id', $state->id)->whereActive(true)->get();
            }
        }
    }

    public function updatedCountry($countryName)
    {
        $country = Country::where('name', $countryName)->first();
        if ($country) {
            $this->states = State::where('country_id', $country->id)->whereActive(true)->get();
            $this->state = null;
            $this->cities = [];
        }
    }

    public function updatedState($stateName)
    {
        $state = State::where('name', $stateName)->first();
        if ($state) {
            $this->cities = City::where('state_id', $state->id)->whereActive(true)->get();
            $this->city = null;
        }
    }

    public function update()
    {
        // Validate the data before proceeding
        $this->validate();

        // Get the authenticated hotel owner
        $hotelOwner = Auth::user()->hotelOwner;

        // Update the existing branch using the stored names for country, state, and city
        $this->branch->update([
            'name' => Str::slug($hotelOwner->hotel->name) . "/" . $this->city,
            'address' => $this->address,
            'city' => $this->city,         // City name
            'state' => $this->state,       // State name
            'country' => $this->country,   // Country name
            'amenities' => json_encode($this->amenities), // Convert amenities to JSON string
            'zip_code' => $this->zip_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'map_url' => $this->map_url,
        ]);

        // Flash a success message and close the form or drawer
        $this->dispatch('close-edit-branch-drawer');
        session()->flash('success', 'Branch has been successfully updated.');
        $this->redirect(route('user.branch.detail', Crypt::encryptString($this->branch->id)),  true);
    }
    public function render()
    {
        return view('livewire.user.partials.edit-branch');
    }
}
