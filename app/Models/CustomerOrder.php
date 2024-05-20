<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerOrder extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'customer_id',
        'order_date',
        'order_details',
        'tracking_number',
    ];

    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'order_date' => 'date',
        'oder_details' => 'string',
        'tracking_number' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
