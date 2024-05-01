<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subject_name',
        'subject_name1',
        'subject_name2',
        'subject_name3',
    ];

    protected $casts = [
        'id' => 'integer',
        'subject_name' => 'string',
        'subject_name1' => 'string',
        'subject_name2' => 'string',
        'subject_name3' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // public function student(): BelongsTo
    // {
    //     return $this->belongsTo(Student::class, 'StudentMark');
    // }

    public function student()
    {
        return $this->belongsToMany(Student::class)->withPivot('student_marks');

    }
}
