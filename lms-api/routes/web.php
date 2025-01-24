<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function () {
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/{id}', [CourseController::class, 'show']);
    Route::post('/courses', [CourseController::class, 'store']);
    Route::put('/courses/{id}', [CourseController::class, 'update']);
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);
});

Route::get('/lessons', [LessonController::class, 'index']); // List all lessons
Route::get('/lessons/{id}', [LessonController::class, 'show']); // Get lesson by ID
Route::post('/lessons', [LessonController::class, 'store']); // Create a new lesson
Route::put('/lessons/{id}', [LessonController::class, 'update']); // Update lesson by ID
Route::delete('/lessons/{id}', [LessonController::class, 'destroy']); // Delete lesson by ID

// User Routes (for instructors or general users)
Route::get('/users', [UserController::class, 'index']); // List all users
Route::get('/users/{id}', [UserController::class, 'show']); // Get user by ID
Route::post('/users', [UserController::class, 'store']); // Create a new user
Route::put('/users/{id}', [UserController::class, 'update']); // Update user by ID
Route::delete('/users/{id}', [UserController::class, 'destroy']); // Delete user by ID