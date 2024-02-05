<?php

use App\Http\Controllers\Admin\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AdmissionController;
use App\Http\Controllers\Frontend\CourseController as FrontendCourseController;

Route::group(['prefix' => 'view'], function () {
    Route::get('/admission', [AdmissionController::class, 'CreateAdmission'])->name('create.admission');
    Route::post('/admission-store', [AdmissionController::class, 'StoreAndUpdateAdmission'])->name('store.admission');
});


// FRONTEND HOME PAGE 
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');


// COURCES
Route::group(['prefix' => 'view'], function () {
    Route::get('/courses', [FrontendCourseController::class, 'index'])->name('courses.index');
    
});