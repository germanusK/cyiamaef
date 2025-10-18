<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'caption', 'description', 'featured_image', 'published'];
    protected $dates = ['created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
