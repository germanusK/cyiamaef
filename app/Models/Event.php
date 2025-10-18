<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'caption', 'description', 'address', 'set_time', 'links', 'project_id', 'category_id', 'published', 'featured_image'];
    protected $dates = ['set_time', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
}
