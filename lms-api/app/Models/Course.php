<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'instructor_id', // Allow the instructor_id to be set through mass assignment
    ];

    // A course belongs to an instructor (user)
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    // A course can have many lessons
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
