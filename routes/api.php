<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CurriculumController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\EnrollmentController;
use App\Http\Controllers\Api\StudentController;


    // Manage courses
    Route::post('/courses', [CourseController::class, 'store']);

    // Manage curriculum
    Route::post('/curriculum', [CurriculumController::class, 'store']);

    // Create sections / subject offerings
    Route::post('/sections', [SectionController::class, 'store']);

    // Approve enrollments
    Route::post('/enrollments/{id}/approve', [EnrollmentController::class, 'approve']);

    // Generate Certificate of Registration (COR)
    Route::get('/students/{id}/cor', [StudentController::class, 'cor']);

    // Generate Transcript of Records
    Route::get('/students/{id}/transcript', [StudentController::class, 'transcript']);
