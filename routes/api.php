<?php

use App\Http\Controllers\Api\V1\Course\CourseController;
use Illuminate\Support\Facades\Route;

Route::prefix('/api/v1')->group(function () {
    Route::apiResource('/courses', CourseController::class)
        ->names('course')
        ->except(['create', 'edit']);
});
