<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Enums\UserStatus;
use App\Models\HotelOwner;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

#[Layout('reg-layout')]
class CreateAccount extends Component
{
    // public $response;

    public $currentStep = 1;
    public $firstStepData = [
        'firstName' => '',
        'lastName' => '',
    ];
    public $secondStepData = [
        'source' => ''
    ];
    public $thirdStepData = [
         'email' => '',
    ];

    public $forthStepData = [
        'password' => '',
        'password_confirmation' => '',
    ];

    public $fifthStepData = [
        'isOwner' => ''
    ];

    protected $rules = [
        'firstStepData.firstName' => 'required|string|max:255',
        'firstStepData.lastName' => 'required|string|max:255',
        'secondStepData.source' => 'required|string|max:255',
        'thirdStepData.email' => 'required|email|unique:users,email',
        'forthStepData.password' => 'required|string|min:8|confirmed',
        'fifthStepData.isOwner' => 'required|string',
    ];

    protected $messages = [
        'firstStepData.firstName.required' => 'Your first name is required',
        'firstStepData.lastName.required' => 'Your last name is required',
        'secondStepData.source.required' => '* Please, we\'re really curious to know how you heard about us',
        'thirdStepData.email.required' => 'Email is required',
        'thirdStepData.email.email' => 'Email must be a valid email address',
        'thirdStepData.email.unique' => 'Seem\'s this email has already been used',
        'forthStepData.password.required' => 'Password is required',
        'forthStepData.password.min' => 'Password must be at least 8 characters',
        'forthStepData.password.confirmed' => 'Password confirmation does not match',
        'fifthStepData.isOwner.required' => '* We really need to know if you\'re the owner or not'
    ];


    public function goToNextStep()
    {
        if ($this->currentStep == 1) {
            // sleep(4);
            $this->validate([
                'firstStepData.firstName' => 'required|string|max:255',
                'firstStepData.lastName' => 'required|string|max:255',
            ]);
        } elseif ($this->currentStep == 2) {
            //  sleep(1);
            $this->validate([
                'secondStepData.source' => 'required|string|max:255',
            ]);
        }elseIf ($this->currentStep == 3){
            // sleep(1);
            $this->validate([
                'thirdStepData.email' => 'required|email|unique:users,email',
            ]);
        }elseif ($this->currentStep == 4){
           $this->validate([
                'forthStepData.password' => 'required|string|min:8|confirmed',
           ]);
        }

        $this->currentStep++;
    }

    public function goToPreviousStep()
    {
        $this->currentStep--;
    }

    public function submit()
    {
        $this->validate();

        // Save data to the database or perform other actions
        $newUser = User::create([
            'first_name' => $this->firstStepData['firstName'],
            'last_name' => $this->firstStepData['lastName'],
            'email' => $this->thirdStepData['email'],
            'status' => UserStatus::PENDING->value,
            'password' => Hash::make($this->forthStepData['password'])
        ]);

        // save hotel owner data
        $newUser->hotelOwner()->create([
            'ref_source' => $this->secondStepData['source'],
            'ownership_status' => $this->fifthStepData['isOwner'],
        ]);

        // log the user in now that account is created
        Auth::login($newUser);

        // set session for successful registration
        session(['create_account_up' => true]);

        // qeu an email they can use for verification
        event(new Registered($newUser));

        // Reset steps and data
        $this->currentStep = 1;
        $this->firstStepData = [];
        $this->secondStepData = [];
        $this->thirdStepData = [];
        $this->forthStepData = [];
        $this->fifthStepData = [];

        session()->flash('status', 'Registration successful!');
        $this->redirect(route('create.account.success'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.create-account');
    }
}
