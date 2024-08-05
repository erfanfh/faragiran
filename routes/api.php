<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\CourseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/courses/{course}', [CourseLessonController::class, 'store']);
Route::put('/courses/{course}', [CourseController::class, 'update']);