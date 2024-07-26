<?php

// app/Http/Controllers/LessonController.php
namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course_id' => 'required|exists:courses,id',
            'price' => 'required',
        ]);
        $lesson = Lesson::create($request->all());
        return response()->json([
            'lesson' => $lesson,
            'message' => 'Lesson created successfully'
        ]);
    }
}
