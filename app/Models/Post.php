<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','image_path','category','excerpt','content','is_published'];

    public function scopePublished($q){ return $q->where('is_published', true); }
}
