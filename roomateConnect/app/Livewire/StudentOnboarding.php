<?php

namespace App\Livewire;

use App\Models\Location;
use App\Models\Preverence;
use App\Models\Profile;
use App\Models\roommate_preference;
use App\Models\roommate_profile;
use App\Models\user_verification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class StudentOnboarding extends Component
{
    use WithFileUploads;
    public $currentStep=1;
    public $totalStep=7;
    public $photo;
    public $name;
    public $tel;
    public $institution;
    public $gender;
    public $level;
    public $department;
    public $intent =[];
    public $locationQuery;
    public $location_results = [];
    public $selectedLocations = [];
    public $min_budget;
    public $max_budget;
    public $move_in_date ;
    public $shareUtilities;
    public $cookTogether;
    public $mySleepSchedule;
    public $cleanliness_level;
    public $Has_Pets;
    public $my_vibes=[];
    public $overnight_guest;
    public $social;
    public $my_other_opinions;
    public $utility_Sharing;
    public $shared_Expenses;
    public $expected_Sleeping_Schedule;
    public $expected_Cleanliness_Level;
    public $smoking_allowed;
    public $alcohol_Allowed;
    public $Pets_allowed;
    public $personality;
    public $preferred_vibe=[];
    public $other_expectation;
    public $student_ID_Card;
    public $proof_of_Enrollment;
    

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

    public function studentVerification(){
        $this->validate([
            'proof_of_Enrollment'=>'nullable|file|max:4096',
            'student_ID_Card'=>'required|image|max:2048'
        ]);
       user_verification::updateOrCreate(
    ['user_id' => Auth::id()],
    [
        'student_ID_Card' => $this->student_ID_Card->store('verification', 'public'),
        'proof_of_Enrollment' => $this->proof_of_Enrollment
            ? $this->proof_of_Enrollment->store('verification', 'public')
            : null,
    ]
         );

        return redirect()->route('studentOnboardingSuccess');
       
    }

    // public function processPreference(){
       
    //       if ($this->currentStep < $this->totalStep) {
    //         $this->currentStep++;
    //     }
    // }

    
    public function incrementStep(){
        $create=roommate_profile::updateOrCreate(
            ['user_id'=>Auth::id()]
        );
        if($this->currentStep==1){
            $this->validate([
                'name'=>'required|string|max:70',
                'tel'=>'required|min:10|',
                'institution'=>'required',
                'photo' => 'nullable|image|max:2048',
                'gender'=>'required',
                'level'=>'required',
                'department'=>'required|string|min:5',
            ]);
            $create->update([
                'name'=>$this->name,
                'tel'=>$this->tel,
                'institution'=>$this->institution,
                'photo'=>$this->photo
                ? $this->photo->store('students/photos', 'public')
                : $create->photo,
                'gender'=>$this->gender,
                'level'=>$this->level,
                'department'=>$this->department,
            ]);
        }
        elseif($this->currentStep==2){
              $this->validate([
                'intent'=>'required',
              ]); 
              $create->update([
                'intent'=>$this->intent,
              ]); 
            }
            elseif($this->currentStep==3){
              $this->validate([
                 'selectedLocations' => 'required|array|min:1',
              ]);  
              $create->update([
                'locationQuery'=>$this->selectedLocations,
              ]);
            }
             elseif($this->currentStep==4){
                $this->validate([
                    'move_in_date'=>'required',
                    'min_budget' => 'nullable|numeric|min:0',
                    'max_budget' => 'nullable|numeric|min:0|gte:min_budget',
                ]);
                $create->update([
                   'min_budget' => $this->min_budget,
                    'max_budget' => $this->max_budget,  
                    'move_in_date' => $this->move_in_date,  
                ]);
              }
              elseif($this->currentStep==5){
                $this->validate([
                    'shareUtilities'=>'nullable',
                    'cookTogether'=>'nullable',
                    'mySleepSchedule'=>'required',
                    'cleanliness_level'=>'required',
                    'Has_Pets'=>'nullable',
                    'social'=>'required',
                    'my_vibes'=>'required|array|min:1',
                    'overnight_guest'=>'required',
                    'my_other_opinions'=>'nullable|string',
                ]);
                $create->update([
                   'shareUtilities'=>$this->shareUtilities, 
                   'cookTogether'=>$this->cookTogether, 
                   'mySleepSchedule'=>$this->mySleepSchedule, 
                   'cleanliness_level'=>$this->cleanliness_level, 
                   'Has_Pets'=>$this->Has_Pets, 
                   'social'=>$this->social, 
                   'my_vibes'=>$this->my_vibes, 
                   'overnight_guest'=>$this->overnight_guest, 
                   'my_other_opinions'=>$this->my_other_opinions, 
                ]);
              }
              elseif($this->currentStep==6){
                 $this->validate([
            'utility_Sharing'=>'nullable',
            'shared_Expenses'=>'nullable',
            'alcohol_Allowed'=>'nullable',
            'smoking_allowed'=>'nullable',
            'Pets_allowed'=>'nullable',
            'personality'=>'required',
            'preferred_vibe'=>'required|array|min:1',
            'expected_Sleeping_Schedule'=>'required',
            'expected_Cleanliness_Level'=>'required',
        ]);
        roommate_preference::updateOrCreate([
             'user_id'=>Auth::id(),
             'utility_Sharing'=>$this->utility_Sharing,
             'shared_Expenses'=>$this->shared_Expenses,
             'expected_Sleeping_Schedule'=>$this->expected_Sleeping_Schedule,
             'expected_Cleanliness_Level'=>$this->expected_Cleanliness_Level,
             'smoking_allowed'=>$this->smoking_allowed,
             'alcohol_Allowed'=>$this->alcohol_Allowed,
             'Pets_allowed'=>$this->Pets_allowed,
             'personality'=>$this->personality,
             'preferred_vibe'=>$this->preferred_vibe,
             'other_expectation'=>$this->other_expectation,
        ]);

              }
             
                 if ($this->currentStep < $this->totalStep) {
            $this->currentStep++;
        }
    }

    public function decrementStep(){
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
    
    public function skipStep(){
       if($this->currentStep==$this->totalStep){
         return redirect()->route('studentOnboardingSuccess');
       }
        $this->currentStep++;
    }







    public function render()
    {
       return view('livewire.student-onboarding');
    }   
} 