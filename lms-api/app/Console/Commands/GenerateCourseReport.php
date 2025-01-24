<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateCourseReport extends Command
{
    protected $signature = 'report:generate {courseId}';
    protected $description = 'Generate a report for a specific course';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $courseId = $this->argument('courseId');
        $course = \App\Models\Course::find($courseId);
        if ($course) {
            // Generate the report for the course
            $this->info("Report generated for course: {$course->title}");
        } else {
            $this->error("Course not found.");
        }
    }
}

