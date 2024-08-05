<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonStoreRequest;
use App\Http\Resources\LessonResource;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Price;
use Illuminate\Http\Request;

class CourseLessonController
{
    /**
     * use this method for create a new lesson for an existing course
     */
    public function store(LessonStoreRequest $request, string  $course)
    {

        Course::findOrFail($course);

        $lesson = Lesson::create([
            'name' => $request->input('name'),
            'course_id' => $course,
        ]);

        $price = $lesson->price()->create([
            'amount' => $request->input('price'),
        ]);

        return new LessonResource($lesson);

    }
}
