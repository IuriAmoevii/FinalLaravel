<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;  // Add this import statement

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;  // Use the trait here

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Allow mass assignment of the role attribute
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The relationships: A user can create many courses.
     */
    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }
}
