<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'user_id',
        'hostel_address',
        'tel',
        'room_type',
        'hostel_name',
        'billing ',
        'hostel_price',
        'price_breakdown',
        'number_of_available_rooms',
        'hostel_available_from',
        'hostel_amenities',
        'more_hostel_amenities',
        'hostel_rules',
        'status',
        'media',
    ];
    protected $casts = [
     'media' => 'array',
        'hostel_amenities' => 'array',
        'more_hostel_amenities' => 'array',
          'hostel_available_from' => 'date', 
      
    ];

       public function user()
{
    return $this->belongsTo(User::class);
}
}
