<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;

class UpdateCourse
{
    /**
     * use this method for update a course price
     */
    public function __invoke(UpdateCourseRequest $request, string $course): CourseResource
    {
        $course = Course::findOrFail($course);

        $course->setPrice($request->input('price'));

        return new CourseResource($course);
    }
}
