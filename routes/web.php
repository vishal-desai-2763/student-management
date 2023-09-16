<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatcheController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/student", StudentController::class);
Route::resource("/teacher", TeacherController::class);
Route::resource("/course", CourseController::class);
Route::resource("/batche", BatcheController::class);
Route::resource("/enrollment", EnrollmentController::class);
Route::resource("/payment", PaymentController::class);
Route::resource('report/report1/{pid}',[ReportController::class,'report1']);