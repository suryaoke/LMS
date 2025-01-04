<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Frontend

Route::get('/', [FrontendController::class, 'index'])->name('home');





// Student

Route::group(['middleware' => ['auth:web', 'verified', 'check_role:student'], "prefix" => "student", "as" => "student."], function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});

// instructor

Route::group(['middleware' => ['auth:web', 'verified', 'check_role:instructor'], "prefix" => "instructor", "as" => "instructor."], function () {

    Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
});




require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
