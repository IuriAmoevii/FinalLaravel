<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // Add title and content to the fillable property
    protected $fillable = ['title', 'content'];

    // A lesson belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
