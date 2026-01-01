<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roommate_profile extends Model
{
    protected $fillable = [
        'user_id',
        'photo',
        'name',
        'tel',
        'institution',
        'gender',
        'level',
        'department',
        'intent',
        'locationQuery',
        'move_in_date',
        'min_budget',
        'max_budget',
        'shareUtilities',
        'cookTogether',
        'Has_Pets',
        'gender',
        'cleanliness_level',
        'mySleepSchedule',
        'social',
        'overnight_guest',
        'my_other_opinions',
        'my_vibes',
    ];  

    protected $casts = [
        'intent'=>'array',
        'locationQuery'=>'array',
        'min_budget' => 'decimal:2',
        'max_budget' => 'decimal:2',
        'shareUtilities'=>'boolean',
        'cookTogether'=>'boolean',
        'Has_Pets'=>'boolean',
        'my_vibes'=>'array',
        'move_in_date'=>'date'
    ];
      public function user()
    {
        return $this->belongsTo(User::class);
    }
}
