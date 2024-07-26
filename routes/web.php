<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

Route::get('/', function () {
    return view('welcome');
});

Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::post('/lessons', [LessonController::class, 'store']);
