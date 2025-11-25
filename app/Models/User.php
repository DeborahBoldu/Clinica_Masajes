<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\Service;
=======
>>>>>>> origin/main
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'role', 
=======
>>>>>>> origin/main
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
<<<<<<< HEAD

    /**
     * Relación muchos a muchos con Service.
     */
    public function services()
    {
        return $this->belongsToMany(Service::class)
                    ->withTimestamps()
                    ->withPivot(['contracted_at', 'status']);
    }
=======
>>>>>>> origin/main
}
