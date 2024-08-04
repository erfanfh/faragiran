<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseLessonController;

Route::get('/', function () {
    return view('welcome');
});

Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::post('/lessons', [CourseLessonController::class, 'store']);
