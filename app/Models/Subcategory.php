<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategory';
    protected $fillable = [
        'category_id', 'category_name', 'category_slug'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');//this is category_id is foreign key
    }
}
