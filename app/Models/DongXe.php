<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DongXe extends Model
{
    use HasFactory;
    const LOG_NAME = 'dong_xe';
    protected $table = 'dong_xes';
    protected $guard = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'code',
        'short_name',
        'name',
        'description',
        'type_of_transport_id',
        'weight',
        'volume',
        'volume_unit_id',
        'vehicle_manufacturers_id',
        'has_image',
        'image',
        'image_medium',
        'image_small',
        'active',
    ];

}
