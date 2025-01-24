<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    // List all courses
    public function index()
    {
        // Retrieve all courses and include the instructor relationship
        $courses = Course::with('instructor')->get();

        return response()->json($courses); // Return the courses along with instructor details
    }

    // Get course by ID
    public function show($id)
    {
        $course = Course::with('instructor')->find($id);
        if ($course) {
            return response()->json($course); // Return the course details with instructor
        }
        return response()->json(['message' => 'Course not found'], 404);
    }

    // Create a new course
    public function store(Request $request)
    {
        $course = Course::create($request->all()); // Create a new course
        return response()->json($course, 201); // Return the newly created course
    }

    // Update course by ID
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->update($request->all()); // Update the course
            return response()->json($course); // Return the updated course
        }
        return response()->json(['message' => 'Course not found'], 404);
    }

    // Delete course by ID
    public function destroy($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->delete(); // Delete the course
            return response()->json(['message' => 'Course deleted successfully']);
        }
        return response()->json(['message' => 'Course not found'], 404);
    }
}
