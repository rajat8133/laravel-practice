<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [

        'first_name',
        'last_name',
        'depertment',
        'age',
        'email',
    ];

    protected $casts = [

        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'department' => 'string',
        'age' => 'date',
        'email' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }
}
