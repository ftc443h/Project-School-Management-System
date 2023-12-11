<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PresenceSController;
use App\Http\Controllers\PresenceTController;

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
    return view('pages.layouts.index');
});

Route::get('/', function () {
    return view('pages.main.main');
});

Route::get('/login', function () {
    return view('auth.login');
});

/* Route Get Sudah Terhubung Ke Dalam Controller */
Route::get('dashboard', [DashboardController::class], 'index')->middleware('auth');
Route::get('classroom', [ClassroomController::class], 'index')->middleware('auth');
Route::get('learning', [LearningController::class], 'index')->middleware('auth');
Route::get('presence_st', [PresenceSController::class], 'index')->middleware('auth');
Route::get('presence_tc', [PresenceTController::class], 'index')->middleware('auth');
Route::get('student', [StudentController::class], 'index')->middleware('auth');
Route::get('teacher', [TeacherController::class], 'index')->middleware('auth');
Route::get('users', [UserController::class], 'index')->middleware('auth');

/* Route Resource Sudah Terhubung Ke Dalam Database */
Route::resource('dashboard', 'DashboardController')->middleware('auth');
Route::resource('classroom', 'ClassroomController')->middleware('auth');
Route::resource('learning', 'LearningController')->middleware('auth');
Route::resource('presence_st', 'PresencesController')->middleware('auth');
Route::resource('student', 'StudentController')->middleware('auth');
Route::resource('presence_tc', 'PresenceTController')->middleware('auth');
Route::resource('teacher', 'TeacherController')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');

/* Auth Routes Login */
Auth::routes();