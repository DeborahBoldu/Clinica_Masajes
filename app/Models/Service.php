<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> origin/main

class Service extends Model
{
    use HasFactory;

<<<<<<< HEAD
    
=======
>>>>>>> origin/main
    protected $fillable = [
        'name',
        'slug',
        'image_path',
        'description',
        'duration_minutes',
        'price',
        'benefits',
        'contraindications',
        'long_description',
<<<<<<< HEAD
        'is_active',
    ];

    
=======
        'is_active'
    ];

>>>>>>> origin/main
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

<<<<<<< HEAD
    
=======
>>>>>>> origin/main
    public function getRouteKeyName()
    {
        return 'slug';
    }
<<<<<<< HEAD

    public function users()
    {
        return $this->belongsToMany(User::class)
                    ->withTimestamps()
                    ->withPivot(['contracted_at', 'status']);
    }
=======
>>>>>>> origin/main
}
