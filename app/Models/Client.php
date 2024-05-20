<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [

        'client_name',
        'Contact',
        'address',
        'client_type',
        'client_since',
        'client_status',

    ];

    protected $casts = [
        'id' => 'integer',
        'client_name' => 'string',
        'Contact' => 'string',
        'address' => 'string',
        'client_type' => 'string',
        'client_since' => 'date',
        'client_status' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
