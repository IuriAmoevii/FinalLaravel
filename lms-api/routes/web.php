<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AuthController;


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

Route::middleware([EnsureFrontendRequestsAreStateful::class, 'throttle:api', 'auth:sanctum'])
    ->get('/v1/courses', [CourseController::class, 'index']);

    
    // Route::middleware(['auth:sanctum'])->group(function () {
    //     // Lesson routes
    //     Route::get('/lessons', [LessonController::class, 'index']);
    //     Route::get('/lessons/{id}', [LessonController::class, 'show']);
    //     Route::post('/lessons', [LessonController::class, 'store']);
    //     Route::put('/lessons/{id}', [LessonController::class, 'update']);
    //     Route::delete('/lessons/{id}', [LessonController::class, 'destroy']);
    
    //     // User Routes
    //     Route::get('/users', [UserController::class, 'index']);
    //     Route::get('/users/{id}', [UserController::class, 'show']);
    //     Route::post('/users', [UserController::class, 'store']);
    //     Route::put('/users/{id}', [UserController::class, 'update']);
    //     Route::delete('/users/{id}', [UserController::class, 'destroy']);
    // });
    // Route::post('/user/token', [UserController::class, 'createToken']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('user/token', [UserController::class, 'createToken']);

Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
Route::post('/send-custom-email', [EmailController::class, 'sendCustomEmail']);