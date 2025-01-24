<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return response()->json(Lesson::all());
    }

    public function show($id)
    {
        return response()->json(Lesson::findOrFail($id));
    }

    public function store(Request $request)
    {
        $lesson = Lesson::create($request->all());
        return response()->json($lesson, 201);
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->update($request->all());
        return response()->json($lesson);
    }

    public function destroy($id)
    {
        Lesson::findOrFail($id)->delete();
        return response()->json(['message' => 'Lesson deleted successfully']);
    }
}
