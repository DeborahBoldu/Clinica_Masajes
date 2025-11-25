<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    
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
        'is_active',
    ];

    
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
                    ->withTimestamps()
                    ->withPivot(['contracted_at', 'status']);
    }
}
