<?php

use App\Assigment;
use App\Classroom;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PresenceSController;
use App\Http\Controllers\PresenceTController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AssigmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PdfController;
use App\Lesson;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.main.main');
});

Route::get('/login', function () {
    return view('auth.login');
});

/* Route Get Sudah Terhubung Ke Dalam Controller */
Route::get('profile', [ProfileController::class], 'index')->middleware('auth');
Route::get('dashboard', [DashboardController::class], 'index')->middleware('auth');
Route::get('lesson_value', [LessonController::class], 'index')->middleware('auth');
Route::get('classroom', [ClassroomController::class], 'index')->middleware('auth');
Route::get('learning', [LearningController::class], 'index')->middleware('auth');
Route::get('presence_st', [PresenceSController::class], 'index')->middleware('auth');
Route::get('presence_tc', [PresenceTController::class], 'index')->middleware('auth');
Route::get('student', [StudentController::class], 'index')->middleware('auth');
Route::get('teacher', [TeacherController::class], 'index')->middleware('auth');
Route::get('assigment', [AssigmentController::class], 'index')->middleware('auth');

/* Route Resource Sudah Terhubung Ke Dalam Database */
Route::resource('profile', 'ProfileController')->middleware('auth');
Route::resource('dashboard', 'DashboardController')->middleware('auth');
Route::resource('lesson_value', 'LessonController')->middleware('auth');
Route::resource('classroom', 'ClassroomController')->middleware('auth');
Route::resource('learning', 'LearningController')->middleware('auth');
Route::resource('presence_st', 'PresencesController')->middleware('auth');
Route::resource('student', 'StudentController')->middleware('auth');
Route::resource('presence_tc', 'PresenceTController')->middleware('auth');
Route::resource('teacher', 'TeacherController')->middleware('auth');
Route::resource('assigment', 'AssigmentController')->middleware('auth');

/* Auth Routes Login */
Auth::routes();

/* Route PDF */
Route::get('surat_perizinan', [ClassroomController::class, 'generatePDF'])->middleware('auth');
Route::get('pernilaian_studen', [LessonController::class, 'generatenailaiPDF'])->middleware('auth');