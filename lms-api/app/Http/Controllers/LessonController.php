<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    // List all lessons
    public function index()
    {
        return response()->json(['message' => 'List all lessons']);
    }

    // Get lesson by ID
    public function show($id)
    {
        return response()->json(['message' => "Get lesson with ID $id"]);
    }

    // Create a new lesson
    public function store(Request $request)
    {
        return response()->json(['message' => 'Create a new lesson']);
    }

    // Update lesson by ID
    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Update lesson with ID $id"]);
    }

    // Delete lesson by ID
    public function destroy($id)
    {
        return response()->json(['message' => "Delete lesson with ID $id"]);
    }
}
