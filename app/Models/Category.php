<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subcategories;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name', 'category_slug'
    ];

    public function sub_category(){
        return $this->hasOne(subcategories::class, 'category_id');
    }
}
