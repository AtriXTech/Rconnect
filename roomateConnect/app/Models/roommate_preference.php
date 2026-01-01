<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roommate_preference extends Model
{
    protected $fillable = [
        'user_id',
        'utility_Sharing',
        'shared_Expenses',
        'expected_Sleeping_Schedule',
        'expected_Cleanliness_Level',
        'smoking_allowed',
        'alcohol_Allowed',
        'Pets_allowed',
        'personality',
        'preferred_vibe',
        'other_expectation',

    ];

    protected $casts = [
        'preferred_vibe'=>'array',
        'utility_Sharing'=>'boolean',
        'shared_Expenses'=>'boolean',
        'smoking_allowed'=>'boolean',
        'alcohol_Allowed'=>'boolean',
        'Pets_allowed'=>'boolean',
       

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
