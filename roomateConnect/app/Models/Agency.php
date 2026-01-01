<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
        use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone_country',
        'phone_number',
        'gender',
        'photo',
        'agent_type',
        'locations',
        'services',
        'commission_type',
        'commission_value',
        'min_budget',
        'max_budget',
        'government_id_front',
        'government_id_back',
        'business_certificate',
        'agent_reference',
    ];

    protected $casts = [
        'locations' => 'array',
        'services' => 'array',
        'commission_value' => 'decimal:2',
        'min_budget' => 'decimal:2',
        'max_budget' => 'decimal:2',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
