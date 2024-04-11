<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'gender',
        'email',
        'marks',
        'date_of_birth',
        'phone_number',
        'address',
        'postal_code',
        'country',

    ];

    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'marks' => 'integer',
        'date_of_birth' => 'date',
        'phone_number' => 'integer',
        'address' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];
}
