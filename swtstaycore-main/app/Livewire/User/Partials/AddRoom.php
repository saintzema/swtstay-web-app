<?php

namespace App\Livewire\User\Partials;

use App\Models\Room;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AddRoom extends Component
{
    use WithFileUploads;

    public $roomNumber;
    public $price;
    public $roomType;
    public $maxOccupancy;
    public $maxAdult;
    public $maxChildren;
    public $description;
    public $bedType;
    public $branchId;

    public $imageFiles = [];
    public $facilities = ['Free wifi', 'Flat-Screen TV', 'Room service', 'Refrigerator', 'AC-tight', 'Water heater', 'Towels'];
    public $currentFacility = '';


    protected $rules = [
        'branchId' => 'required',
        'roomNumber' => 'required',
        'price' => 'required',
        'roomType' => 'required',
        'bedType' => 'required',
        'maxOccupancy' => 'required|integer',
        'maxAdult' => 'required|integer',
        'maxChildren' => 'required|integer',
        'description' => 'required|string',
        'imageFiles' => 'required',
        'imageFiles.*' => 'image|max:2048',
        'facilities' => 'required|array',
        'facilities.*' => 'string',
    ];

    public function addFacility($facility)
    {
        $facility = trim($facility);
        // Only add the facility if it's not empty and not already in the list
        if (!empty($facility) && !in_array($facility, $this->facilities)) {
            $this->facilities[] = $facility;
        }
        $this->currentFacility = '';
    }

    public function removeFacility($index)
    {
        unset($this->facilities[$index]);
        $this->facilities = array_values($this->facilities);
    }

    public function removeImage($index)
    {
        array_splice($this->imageFiles, $index, 1);
    }

    public function submit()
    {
        // sleep(2);
        $this->validate();
        // first handling image upload
        $roomImages = [];
        if (!is_null($this->imageFiles)) {
            foreach ($this->imageFiles as $imageFile) {
                // Define a file path and name
                $filePath = 'rooms/' . Str::slug($this->roomNumber) . $imageFile->hashName();
                //  Upload the file to DigitalOcean Spaces
                $isUploaded = Storage::disk('spaces')->put(
                    $filePath,
                    file_get_contents($imageFile->getRealPath()),
                    'public'
                );
                // check if file is uploaded, before storing
                if ($isUploaded) {
                    $roomImages[] = $filePath;
                }
            }
        }
        // get the authenticated hotel owner
        $newRoom = Room::create([
            'branch_id' => $this->branchId,
            'room_number' => $this->roomNumber,
            'room_type' => $this->roomType,
            'bed_type' => $this->bedType,
            'price' => $this->price,
            'max_occupancy' => $this->maxOccupancy,
            'max_adult' => $this->maxAdult,
            'max_children' => $this->maxChildren,
            'description' => $this->description,
            'images' => json_encode($roomImages),
            'facilities' => json_encode($this->facilities),
        ]);
        if($newRoom){
            $this->dispatch('close-add-room-drawer');
            session()->flash('success', 'New room has been successfully created.');
            $this->reset();
            $this->redirect(route('user.room'),  true);
        }

    }

    public function render()
    {
        return view('livewire.user.partials.add-room', [
            'branches' => auth()->user()->HotelOwner->hotel->branches,
        ]);
    }
}
