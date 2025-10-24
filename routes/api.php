<?php

use App\Http\Controllers\Api\V1\Course\CourseController;
use App\Http\Controllers\Api\V1\Course\CourseMediaController;
use App\Http\Controllers\Api\V1\Course\CourseScheduleController;
use Illuminate\Support\Facades\Route;

Route::prefix('/api/v1')->group(function () {
    Route::apiResource('/courses', CourseController::class)
        ->names('course')
        ->except(['create', 'edit']);
    
    Route::apiResource('/course-schedules', CourseScheduleController::class)
        ->names('course-schedules')
        ->except(['create', 'edit']);

    Route::apiResource('/course-media', CourseMediaController::class)
        ->names('course-media')
        ->except(['create', 'edit']);
});
