<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Course;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Find the first course (assuming we have at least one course)
        $course = Course::first();

        if ($course) {
            // Create some lessons for the first course
            $course->lessons()->createMany([
                [
                    'title' => 'Lesson 1: Introduction to Laravel',
                    'content' => 'In this lesson, we cover the basics of Laravel, including installation and setup.',
                ],
                [
                    'title' => 'Lesson 2: Routing in Laravel',
                    'content' => 'Learn about Laravel’s routing system and how to define routes for your application.',
                ],
                [
                    'title' => 'Lesson 3: Working with Databases',
                    'content' => 'Explore how Laravel handles database queries, migrations, and models.',
                ],
            ]);
        }
    }
}
