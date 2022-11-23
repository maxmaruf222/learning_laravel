<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\subcategories;

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
    //__join categories table__//
    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }
    //__join subcategories table__//
    public function subcategory()
    {
        return $this->belongsTo(subcategories::class, 'subcategorie_id');
    }
}
