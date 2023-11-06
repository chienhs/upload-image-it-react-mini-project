<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVuXe extends Model
{
    use HasFactory;
    use HasFactory;
    const LOG_NAME = 'dich_vu_xe';
    protected $table = 'dich_vu_xes';
    protected $guard = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'name',
        'category',
        'priority',
    ];
}
