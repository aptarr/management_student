<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, 'getStudents'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::controller(StudentController::class)->group(function () {
        Route::get('/students', 'getStudents')->name('students.index');
        Route::get('/student/create', 'getStudentCreate')->name('students.create');
        Route::get('/student/{staff_id}/edit', 'getStudentDetail')->name('students.detail');
        Route::get('/students/export', 'exportFilteredStudents')->name('students.export');
        Route::get('/student/{student}/export-pdf', 'exportStudentsData')->name('students.exportData');
        Route::post('/students', 'createStudent')->name('students.store');
        Route::patch('/students/{staff_id}', 'updateStudent')->name('students.update');
        Route::delete('/students/{staff_id}', 'deleteStudent')->name('students.destroy');
    });
});


require __DIR__.'/auth.php';
