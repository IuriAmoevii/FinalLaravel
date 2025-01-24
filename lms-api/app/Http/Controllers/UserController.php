<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'List all users']);
    }

    // Get user by ID
    public function show($id)
    {
        return response()->json(['message' => "Get user with ID $id"]);
    }

    // Create a new user
    public function store(Request $request)
    {
        return response()->json(['message' => 'Create a new user']);
    }

    // Update user by ID
    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Update user with ID $id"]);
    }

    // Delete user by ID
    public function destroy($id)
    {
        return response()->json(['message' => "Delete user with ID $id"]);
    }
}
