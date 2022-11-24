<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'img', 'description', 'tags', 'status', 'post_date'
    ];
    
    //__join users table__//
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //__join category table__//
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    //__join subcategory table__//
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
