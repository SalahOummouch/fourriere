<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'city',
        'gender',
        'date_of_birth',
        'marital_status',
        'age',
        'country',
        'state',
        'address',
        'phone_number',
        'status',
        'email',
        'password',
        'user_type',
    ];

}
