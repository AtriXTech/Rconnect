<?php

namespace App\Livewire;

use Livewire\Component;

class CreateListing extends Component
{
    public $currentStep=1;
    public $totalStep=3;

    public function incrementStep(){
        $this->currentStep++;
    }
    public function decrementStep(){
        $this->currentStep--;
    }
    public function render()
    {
        return view('livewire.create-listing');
    }
}
