<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreLesson;
use App\Http\Controllers\UpdateCourse;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/courses/{course}/lessons', StoreLesson::class);
Route::put('/courses/{course}', UpdateCourse::class);