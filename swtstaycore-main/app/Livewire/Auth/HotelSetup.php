<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
// use Spatie\LivewireFilepond\WithFilePond;

#[Layout('reg-layout')]
class HotelSetup extends Component
{
    // use WithFilePond;
    use WithFileUploads;

    public User $HotelOwner;

    public $imageFiles = [];

    public function removeImage($index)
    {
        array_splice($this->imageFiles, $index, 1);
    }

    #[Url()]
    public $currentStep = 1;
    public $firstStepData = [
        'name' => '',
        'minPrice' => '',
        'maxPrice' => '',
        'description' => '',
    ];
    public $secondStepData = [
        'source' => '',
    ];

    protected $rules = [
        'firstStepData.name' => 'required|string|max:255',
        'firstStepData.minPrice' => 'required',
        'firstStepData.maxPrice' => 'required',
        'firstStepData.description' => 'required|string',
        'secondStepData.source' => 'required',
        'imageFiles' => 'required',
        'imageFiles.*' => 'image|max:2048'
    ];
    protected $messages = [
        'firstStepData.name.required' => 'We need to know your hotel name',
        'firstStepData.minPrice.required' => 'Minimum price is required',
        'firstStepData.maxPrice.required' => 'Maximum price is required',
        'firstStepData.description.required' => 'A brief description of your hotel required',
        'imageFiles' => 'please, upload at least one picture of your hotel',
        'imageFiles.*.image' => "Please all picture must be an image of type '.png, jpg, jpeg",
        'imageFiles.*.image|max:2048' => "Maximum file size is 2mb",
        'secondStepData.source.required' => '* Please, we really need to know if you have multiple branches or not',
    ];

    public function goToNextStep()
    {
        // dd(Auth::user()->hotelOwner);

        // validation
        if($this->currentStep == 1){
            $this->validate([
                'firstStepData.name' => 'required|string|max:255',
                'firstStepData.minPrice' => 'required',
                'firstStepData.maxPrice' => 'required',
                'firstStepData.description' => 'required|string',
                'imageFiles' => 'required',
                'imageFiles.*' => 'image|max:2048'
            ]);
        }
       $this->currentStep++;
    }

    public function goToPreviousStep()
    {
        $this->currentStep--;
    }

    public function finish()
    {
        $this->validate();
        $HotelOwner = Auth::user()->hotelOwner;
        // first handling image upload
        $hotelImages = [];
        if (!is_null($this->imageFiles)) {
            foreach ($this->imageFiles as $imageFile) {
                // Define a file path and name
                $filePath = 'hotels/' . Str::slug($this->firstStepData['name']) . $imageFile->hashName();
                //  Upload the file to DigitalOcean Spaces
                $isUploaded = Storage::disk('spaces')->put(
                    $filePath,
                    file_get_contents($imageFile->getRealPath()),
                    'public'
                );
                // check if file is uploaded, before storing
                if ($isUploaded) {
                    $hotelImages[] = $filePath;
                }
            }
        }
        // Now, handling the creation of the hotel to my db
        $HotelOwner->hotel()->create([
            'name' => $this->firstStepData['name'],
            'images' => json_encode($hotelImages),
            'min_price' => $this->firstStepData['minPrice'],
            'max_price' => $this->firstStepData['maxPrice'],
            'description' => $this->firstStepData['description'],
        ]);
        // Todo: send a welcome email to this hotel owner.

        // set session for successful registration
        session(['setup_done' => true]);

        // redirect the use to success page
        $this->redirect(route('setup.success'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.hotel-setup');
    }
}
