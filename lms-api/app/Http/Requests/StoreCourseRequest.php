<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest; // Import the custom request class
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // List all courses
    public function index()
    {
        // Return all courses from the database
        $courses = Course::all();
        return response()->json($courses);
    }

    // Get course by ID
    public function show($id)
    {
        // Find the course by ID or return a 404 if not found
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        return response()->json($course);
    }

    // Create a new course
    public function store(StoreCourseRequest $request)
    {
        // The StoreCourseRequest will automatically validate the request data
        $validatedData = $request->validated(); // Get the validated data

        // Create the new course
        $course = Course::create($validatedData);

        // Return the created course as a JSON response
        return response()->json($course, 201); // 201 status for created resource
    }

    // Update course by ID
    public function update(StoreCourseRequest $request, $id)
    {
        // Find the course by ID
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // Validate and update the course data
        $validatedData = $request->validated(); // Get validated data
        $course->update($validatedData); // Update the course with new data

        return response()->json($course);
    }

    // Delete course by ID
    public function destroy($id)
    {
        // Find the course by ID
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // Delete the course
        $course->delete();

        return response()->json(['message' => 'Course deleted successfully']);
    }
}
