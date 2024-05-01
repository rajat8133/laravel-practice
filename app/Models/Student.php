<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

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

    protected $hidden = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',

    ];

    // public function subject(): BelongsTo
    // {
    //     return $this->belongsTo(Subject::class, 'student_marks');
    // }

    public function subject()
    {
        return $this->belongsToMany(Subject::class)->withPivot('student_marks');
    }
}
