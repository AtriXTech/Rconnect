<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;

class ListingDetails extends Component
{

    
    public Listing $listing;
    public int $currentIndex = 0;

    public function mount($listingId)
    {
        $this->listing = Listing::findOrFail($listingId);
    }

    public function nextImage()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->listing->media);
    }

    public function prevImage()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->listing->media)) % count($this->listing->media);
    }

    public function render()
    {
        return view('livewire.listing-details');
    }
}
