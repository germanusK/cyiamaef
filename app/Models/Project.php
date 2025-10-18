<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'caption', 'description', 'launch_date', 'featured_image', 'category_id', 'published'];
    protected $dates = ['launch_date', 'created_at', 'updated_at'];

    public function category(){return $this->belongsTo(Category::class, 'category_id');}
    public function events(){return $this->hasMany(Event::class, 'project_id');}
}
