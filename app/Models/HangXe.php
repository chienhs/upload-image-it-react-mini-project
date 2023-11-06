<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangXe extends Model
{
    use HasFactory;
    const LOG_NAME = 'hang_xe';
    protected $table = 'hang_xes';
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
