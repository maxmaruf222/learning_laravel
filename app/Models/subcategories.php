<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class subcategories extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $fillable = [
        'category_id', 'category_name', 'category_slug'
    ];
    
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
