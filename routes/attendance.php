<?php

use App\Http\Controllers\Admin\AttendanceController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::middleware('check')->prefix('/attendance')->group(function(){
  
    Route::get('/add-new-batch', [AttendanceController::class, 'addNewBatch'])->name('add.new.batch');
    Route::get('/edit-bath-number/{id}', [AttendanceController::class, 'editBathNumber'])->name('edit.batchname');
    Route::get('/delete-batch/{id}', [AttendanceController::class, 'deleteBatch'])->name('delete.batch');
    Route::post('/add-new-batch', [AttendanceController::class, 'storeOrUpdate'])->name('insert.new.batch');
    Route::put('/update-batch-no/{id?}', [AttendanceController::class, 'storeOrUpdate'])->name('update.batch');
    Route::get('/admit-student', [AttendanceController::class, 'admitStudent'])->name('admit.student');
    Route::post('/admit-student', [AttendanceController::class, 'admitStudentDatabase'])->name('admit.student.database');
    Route::get('/present-student', [AttendanceController::class, 'presentStudents'])->name('present.students');
    Route::get('/check-student', [AttendanceController::class, 'checkPresent'])->name('check.present');
    Route::post('/submit-attendance', [AttendanceController::class, 'submitAttendance'])->name('present.submit');
    Route::get('/attendance-record-check', [AttendanceController::class, 'attendanceRecordCheck'])->name('attendance.record.check');
    Route::get('/all-attendance-record', [AttendanceController::class, 'allAttendanceRecord'])->name('all.attendance.record');
    Route::get('/attendance-pdf', [AttendanceController::class, 'attendancePdf'])->name('attendance.pdf');
    Route::get('/attendance-pdf-data', [AttendanceController::class, 'attendancePdfData'])->name('attendance.pdf.data');
    Route::put('/edit-attendance', [AttendanceController::class, 'editAttendance'])->name('edit.attendance');
    



    Route::get('/admited-students', [AttendanceController::class, 'admitedStudents'])->name('admited.student');
    Route::get('/edit-admited-students/{id}', [AttendanceController::class, 'editAdmitedStudents'])->name('edit.admited.student');
    Route::put('/update-student-info', [AttendanceController::class, 'updateStdInfo'])->name('update.std.info');
    Route::get('/delete-student/{id}', [AttendanceController::class, 'deleteStudent'])->name('delete.student');
  })->middleware('check');