<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // List all courses
    public function index()
    {
        return response()->json(['message' => 'List all courses']);
    }

    // Get course by ID
    public function show($id)
    {
        return response()->json(['message' => "Get course with ID $id"]);
    }

    // Create a new course
    public function store(Request $request)
    {
        return response()->json(['message' => 'Create a new course']);
    }

    // Update course by ID
    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Update course with ID $id"]);
    }

    // Delete course by ID
    public function destroy($id)
    {
        return response()->json(['message' => "Delete course with ID $id"]);
    }
}
