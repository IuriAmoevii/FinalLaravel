<?php

namespace App\Http\Controllers;

use App\Models\Course;

class ShowCourse extends Controller
{
    public function __invoke($id)
    {
        return Course::findOrFail($id);
    }
}
