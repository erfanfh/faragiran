<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseLessonController;
use Illuminate\Support\Facades\Route;


Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::post('/lessons', [CourseLessonController::class, 'store']);
