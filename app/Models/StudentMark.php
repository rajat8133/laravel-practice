<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentMark extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'marks',
        'grade',
        'percentage',
    ];

    protected $casts = [
        'id' => 'integer',
        'marks' => 'float',
        'grade' => 'string',
        'percentage' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
