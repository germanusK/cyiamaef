<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description'];
    protected $dates = ['created_at', 'updated_at'];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id');
    }

    public function events(){
        return $this->hasMany(Event::class, 'category_id');
    }

    public function projects(){
        return $this->hasMany(Project::class, 'category_id');
    }
}
