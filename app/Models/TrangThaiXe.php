<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangThaiXe extends Model
{
    use HasFactory;
    const LOG_NAME = 'trang_thai_xe';
    protected $table = 'trang_thai_xes';
    protected $guard = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'name',
        'priority',
    ];
}
