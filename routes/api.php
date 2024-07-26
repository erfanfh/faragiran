<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;


Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::post('/lessons', [LessonController::class, 'store']);
