<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AllowanceRegistrationController;
use App\Http\Controllers\ScholarApplicantRegistrationController;

//Login
Route::get('/', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);

//Register
Route::get('registration', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);

//Forgot Password
Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('forgot_post', [AuthController::class, 'forgot_post']);

//Reset

Route::get('reset/{token}', [AuthController::class, 'getReset']);
Route::post('reset_post/{token}', [AuthController::class, 'postReset']);

//Middleware Admin
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/menu', [MenuController::class, 'menu']);

    //Manage Users
    Route::get('admin/manage/users', [AdminController::class, 'users']);

    //Online Registration
    Route::get('admin/onlineregistration/choices', [AdminController::class, 'choices']);

    //Allowance Registration
    Route::get('admin/onlineregistration/selection/allowanceregistration/submission/scholarsubmission', [AdminController::class, 'scholarsubmission']);
    Route::get('admin/onlineregistration/selection/allowanceregistration/validatescholar', [AdminController::class, 'validatescholar']);

    //Scholar Registration
    Route::get('admin/onlineregistration/selection/scholarregistration/submission/applicantsubmission', [AdminController::class, 'applicantsubmission']);
    Route::get('admin/onlineregistration/selection/scholarregistration/validateapplicant', [AdminController::class, 'validateapplicant']);

    //Documents 
    Route::get('admin/repository/documents', [AdminController::class, 'documents']);
});

//Middleware Scholar
Route::group(['middleware' => 'scholar'], function(){
    Route::get('scholar/menu', [MenuController::class, 'menu']);
});

//Middleware Applicant
Route::group(['middleware' => 'applicant'], function(){
    Route::get('applicant/menu', [MenuController::class, 'menu']);

    //Scholar Applicant Registration
    Route::get('applicant/scholarapplicantregistration/filloutform', [ApplicantController::class, 'filloutform']);
    Route::get('applicant/scholarapplicantregistration/submission/scholarapplicantsubmission', [ApplicantController::class, 'scholarapplicantsubmission']);
});

//Logout 
Route::get('logout', [AuthController::class, 'logout']);
