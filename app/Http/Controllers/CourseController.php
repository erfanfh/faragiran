<?php

// app/Http/Controllers/CourseController.php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'price' => 'required'
        ]);
        $course->update($request->all());
        return response()->json([
            'course' => $course,
            'message' => 'Course updated successfully'
        ]);
    }
}
