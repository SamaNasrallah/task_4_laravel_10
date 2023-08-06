<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
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
    return view('course.login');
});
Route::get('home', function () {
    return view('home');
});

Route::get('student', function () {
    return view('student.createSt');
});

Route::resource('login', UserController::class) ;
 Route::resource('course', CourseController::class) ;
 Route::resource('category', CategoryController::class) ;
 Route::resource('student', StudentController::class) ;


 Route::patch('students/{student}', 'App\Http\Controllers\StudentController@toggleActivation')->name('student.toggleActivation');










