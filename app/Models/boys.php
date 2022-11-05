<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boys extends Model
{
    use HasFactory;

    protected $table = 'boys';
    protected $fillable = [
        'name',
        'roll',
        'group',
        'status',
    ];
}
