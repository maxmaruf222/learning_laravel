<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class girls extends Model
{
    use HasFactory;

    protected $table = 'girls';

    protected $fillable = [
        'name',
        'roll',
        'group',
        'status',
    ];
}
