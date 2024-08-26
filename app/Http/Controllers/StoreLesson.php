<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLessonRequest;
use App\Http\Resources\LessonResource;
use App\Models\Course;
use App\Models\Lesson;

class StoreLesson
{
    /**
     * use this method for create a new lesson for an existing course
     */
    public function __invoke(StoreLessonRequest $request, int $courseId): LessonResource
    {
        $course = Course::findOrFail($courseId);

        $lesson = Lesson::create([
            'name' => $request->input('name'),
            'course' => $course,
        ]);

        $lesson->setPrice($request->input('price'));

        return new LessonResource($lesson);
    }
}
