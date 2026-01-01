<?php

namespace App\Livewire;

use App\Models\Agency;
use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AgentOnboarding extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $totalSteps = 7;

    // STEP 1
    public $full_name;
    public $phone_country = 'US';
    public $phone_number;
    public $email;
    public $gender;
    public $photo;

    // STEP 2
    public $agent_type;

    // STEP 3
    public $locationQuery = '';
    public $location_results = [];
    public $selectedLocations = [];

    // STEP 4
    public $services = [];

    // STEP 5
    public $commission_type;
    public $commission_value;
    public $min_budget;
    public $max_budget;

    // STEP 6
    public $government_id_front;
    public $government_id_back;
    public $business_certificate;

    // STEP 7
    public $agent_reference;

    /* -----------------------------
        LOCATION SEARCH
    ------------------------------*/
    public function updatedLocationQuery()
    {
        if (trim($this->locationQuery)) {
            $this->location_results = Location::where(
                'name',
                'like',
                "%{$this->locationQuery}%"
            )->limit(10)->get()->toArray();
        } else {
            $this->location_results = [];
        }
    }

    public function addLocation($name)
    {
        if (!in_array($name, $this->selectedLocations)) {
            $this->selectedLocations[] = $name;
        }
        $this->locationQuery = '';
        $this->location_results = [];
    }

    public function removeLocation($index)
    {
        unset($this->selectedLocations[$index]);
        $this->selectedLocations = array_values($this->selectedLocations);
    }

    /* -----------------------------
        SAVE PER STEP
    ------------------------------*/
    public function saveStep()
    {
        $agency = Agency::firstOrCreate(
            ['user_id' => Auth::id()],
            ['agent_reference' => 'AG' . strtoupper(uniqid())]
        );

        switch ($this->currentStep) {

            /* STEP 1 */
            case 1:
                $this->validate([
                    'full_name' => 'required|string|max:255',
                    'email' => 'required|email',
                    'phone_country' => 'required',
                    'phone_number' => 'required',
                    'photo' => 'nullable|image|max:2048',
                ]);

                $agency->update([
                    'full_name' => $this->full_name,
                    'email' => $this->email,
                    'phone_country' => $this->phone_country,
                    'phone_number' => $this->phone_number,
                    'gender' => $this->gender,
                    'photo' => $this->photo
                        ? $this->photo->store('agents/photos', 'public')
                        : $agency->photo,
                ]);
                break;

            /* STEP 2 */
            case 2:
                $this->validate([
                    'agent_type' => 'required',
                ]);

                $agency->update([
                    'agent_type' => $this->agent_type,
                ]);
                break;

            /* STEP 3 */
            case 3:
    $this->validate([
        'selectedLocations' => 'required|array|min:1',
    ]);

    $agency->update([
        'locations' => $this->selectedLocations,
    ]);
    break;


            /* STEP 4 */
            case 4:
                $this->validate([
                    'services' => 'required|array|min:1',
                ]);

                $agency->update([
                    'services' => $this->services,
                ]);
                break;

            /* STEP 5 */
            case 5:
                $this->validate([
                    'commission_type' => 'nullable|in:percentage,fixed',
                    'commission_value' => 'nullable|numeric|min:0',
                    'min_budget' => 'nullable|numeric|min:0',
                    'max_budget' => 'nullable|numeric|min:0|gte:min_budget',
                ]);

                $agency->update([
                    'commission_type' => $this->commission_type,
                    'commission_value' => $this->commission_value,
                    'min_budget' => $this->min_budget,
                    'max_budget' => $this->max_budget,
                ]);
                break;

            /* STEP 6 */
            case 6:
                $this->validate([
                    'government_id_front' => 'nullable|image|max:2048',
                    'government_id_back' => 'nullable|image|max:2048',
                    'business_certificate' => 'nullable|mimes:pdf,jpg,jpeg,png|max:5120',
                ]);

                $agency->update([
                    'government_id_front' => $this->government_id_front
                        ? $this->government_id_front->store('agents/id', 'public')
                        : $agency->government_id_front,

                    'government_id_back' => $this->government_id_back
                        ? $this->government_id_back->store('agents/id', 'public')
                        : $agency->government_id_back,

                    'business_certificate' => $this->business_certificate
                        ? $this->business_certificate->store('agents/certificates', 'public')
                        : $agency->business_certificate,
                ]);
                break;

            /* STEP 7 */
            case 7:
                return redirect()->route('agentOnboardingSuccess');
        }

        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
    public function skip()
    {
       
            $this->currentStep++;
        
    }

    public function render()
    {
        return view('livewire.agent-onboarding');
    }
}
