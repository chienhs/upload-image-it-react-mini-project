<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomXe extends Model
{
    use HasFactory;
    const LOG_NAME = 'nhom_xe';
    protected $table = 'nhom_xes';
    protected $guard = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'code',
        'name',
        'description',
        'active',
    ];
}
