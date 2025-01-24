<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Find an instructor user
        $instructor = User::where('role', 'instructor')->first();

        if ($instructor) {
            // Create some courses for the instructor
            $instructor->courses()->createMany([
                [
                    'title' => 'Laravel Basics',
                    'description' => 'Learn the basics of Laravel framework.',
                ],
                [
                    'title' => 'Advanced Laravel',
                    'description' => 'Take your Laravel skills to the next level.',
                ],
            ]);
        }
    }
}
