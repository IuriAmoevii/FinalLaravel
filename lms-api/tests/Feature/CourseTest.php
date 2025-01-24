<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Course;

class CourseTest extends TestCase
{
    public function test_courses_endpoint()
    {
        $response = $this->getJson('/api/v1/courses');
        $response->assertStatus(200);
    }
}
