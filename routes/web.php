<?php

use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * ------------------------------------
 * Student All Routes Start
 * ------------------------------------
 * */
Route::group(['middleware' => ['auth:web', 'verified', 'checkRole:student'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});

/**
 * ------------------------------------
 * Student All Routes End
 * ------------------------------------
 * */

/**
 * ----------------------------------
 * Instructor All Routes Start
 * ---------------------------------
 *  */
Route::group(['middleware' => ['auth:web', 'verified', 'checkRole:instructor'], 'prefix' => 'instructor', 'as' => 'instructor.'], function () {
    Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
});

/**
 * ----------------------------------
 * Instructor All Routes End
 * ---------------------------------
 *  */

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
