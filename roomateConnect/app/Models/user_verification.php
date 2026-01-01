<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_verification extends Model
{
      protected $table = 'student_verification';
    protected $fillable = [
        'user_id',
        'student_ID_Card',
        'proof_of_Enrollment'
    ];

}
