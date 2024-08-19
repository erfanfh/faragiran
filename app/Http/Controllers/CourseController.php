<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseUpdateRequest;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\CourseResource;
use App\Models\Course;

class CourseController
{
    /**
     * use this method for update a course price
     */
    public function __invoke(CourseUpdateRequest $request, string $course): CourseResource
    {

        $course = Course::findOrFail($course);

        $course->setPrice($request->input('price'));

        return new CourseResource($course);
    }
}
