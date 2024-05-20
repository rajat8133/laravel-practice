<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipment extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'tracking_number',
        'shipment_status',
        'carrier_name',
        'destination',
        'order_number',
        'shipment_date',
    ];

    protected $casts = [
        'id' => 'integer',
        'tracking_number' => 'string',
        'shipment_status' => 'string',
        'carrier_name' => 'string',
        'destination' => 'string',
        'order_number' => 'string',
        'shipment_date' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
