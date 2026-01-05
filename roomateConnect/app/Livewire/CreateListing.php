<?php

namespace App\Livewire;

use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateListing extends Component
{
    use WithFileUploads;

    public $hostel_name;
    public $hostel_address;
    public $tel;
    public $room_type;
    public $billing;
    public $hostel_price;
    public $price_breakdown;
    public $number_of_available_rooms;
    public $hostel_available_from;

    public $hostel_amenities = [];
    public $more_hostel_amenities;
    public $hostel_rules;

    public $media = [];
    public $listingId; // store the listing id between steps

    public $currentStep = 1;
    public $totalStep = 3;

    public function saveStep()
    {
        // STEP 1
        if ($this->currentStep == 1) {
            $this->validate([
                'hostel_name' => 'required|string|min:5',
                'hostel_address' => 'required|string|min:10',
                'tel' => ['required', 'string', 'regex:/^\+?\d{10,15}$/', 'min:10'],
            ]);

            // Create listing if not exists
            $listing = Listing::firstOrCreate(
                ['user_id' => Auth::id()],
                 ['status' => 'draft'],
                [
                    'hostel_name' => $this->hostel_name,
                    'hostel_address' => $this->hostel_address,
                    'tel' => $this->tel,
                ]
            );

            $this->listingId = $listing->id;
        }

        // STEP 2
        elseif ($this->currentStep == 2) {
            $this->validate([
                'room_type' => 'required|string|min:3|max:100',
                'billing' => 'required|in:Yearly,Per Semester',
                'hostel_price' => 'required|numeric|min:0',
                'price_breakdown' => 'nullable|string|max:500',
                'number_of_available_rooms' => 'required|integer|min:1',
                'hostel_available_from' => 'required|date|after_or_equal:today',
            ]);

            $listing = Listing::findOrFail($this->listingId);
            $listing->update([
                'room_type' => $this->room_type,
                'billing' => $this->billing,
                'hostel_price' => $this->hostel_price,
                'price_breakdown' => $this->price_breakdown,
                'number_of_available_rooms' => $this->number_of_available_rooms,
                'hostel_available_from' => $this->hostel_available_from,
            ]);
        }

        elseif ($this->currentStep == 3) {

    $this->validate([
        'hostel_amenities' => 'required|array|min:1',
        'hostel_rules'     => 'nullable|string|min:10',
        'media'            => 'required|array|min:3',
        'media.*'          => 'file|mimes:jpg,jpeg,png,webp,mp4,mov,avi|max:20480',
    ]);

    $mediaPaths = [];

    foreach ($this->media as $file) {
        $path = $file->store('hostels', 'public');

        $mediaPaths[] = [
            'path' => $path,
            'type' => str_starts_with($file->getMimeType(), 'image') ? 'image' : 'video',
        ];
    }

         $listing = Listing::findOrFail($this->listingId);
        $listing->update([
        'hostel_amenities' => array_merge(
            $this->hostel_amenities,
            array_filter([$this->more_hostel_amenities])
        ),
        'hostel_rules' => $this->hostel_rules,
        'media'        => $mediaPaths, // JSON
    ]);
}

        $this->currentStep++;
       
    }

    public function removeMedia($index)
    {
        unset($this->media[$index]);
        $this->media = array_values($this->media);
    }


    public function decrementStep()
    {
        $this->currentStep--;
    }

    public function render()
    {
        return view('livewire.create-listing');
    }
}
