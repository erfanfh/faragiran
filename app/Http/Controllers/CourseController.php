<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseUpdateRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController
{
    /**
     * use this method for update a course price
     */
    public function update(CourseUpdateRequest $request, string $course)
    {

        $course = Course::findOrFail($course);

        $course->price()->update([
            'amount' => $request->input('price')
        ]);

        return new CourseResource($course);

    }
}
