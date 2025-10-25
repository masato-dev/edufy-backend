<?php

use App\Http\Controllers\Api\V1\Course\CourseController;
use App\Http\Controllers\Api\V1\Course\CourseMediaController;
use App\Http\Controllers\Api\V1\Course\CourseScheduleController;
use App\Http\Controllers\Api\V1\Lesson\LessonController;
use App\Http\Controllers\Api\V1\Lesson\LessonMediaController;
use App\Http\Controllers\Api\V1\Teacher\TeacherController;
use App\Http\Controllers\Api\V1\TrainingCenter\TrainingCenterController;
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

    Route::apiResource('/lessons', LessonController::class)
        ->names('lessons')
        ->except(['create', 'edit']);

    Route::apiResource('/lesson-media', LessonMediaController::class)
        ->names('lesson-media')
        ->except(['create', 'edit']);

    Route::prefix('/teachers')->group(function () {
        Route::get('/search', [TeacherController::class, 'search'])->name('teachers.search');
    });
    
    Route::apiResource('/teachers', TeacherController::class)
        ->names('teachers')
        ->except(['create', 'edit']);

    Route::prefix("/training-centers")->group(function () {
        Route::get('/search', [TrainingCenterController::class, 'search']);
    });

    Route::apiResource('/training-centers', TrainingCenterController::class)
        ->names('training-centers')
        ->except(['create', 'edit']);
});
