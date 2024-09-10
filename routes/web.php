<?php

use App\Models\Student; 
use App\Models\Course; 
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Student/create', function () {
    $student = new Student();
    $student -> first_name = 'John';
    $student -> last_name = 'Doe';
    $student -> email = 'johndoe@xample.com';
    $student -> age = 22;
    $student ->save();
    return 'Student created!';
});
Route::get('/Student', function (){
    $students = student::all();
    return $students;

});
Route::get('/Student/update', function () {
    $student = student::where('email', 'johndoe@xample.com')->first();
    $student -> email = 'John.doe@newmail.com';
    $student -> age = 23;
    $student ->save();
    return 'Student Updated!';
});
Route::get('/Student/delete', function (){
    $student = student::where('email', 'john.doe@newmail.com')->first();
    $student ->delete();
    return 'Student Deleted!';
});
Route::get('/course/create', function (){
    $course = new Course();
    $course ->course_name = 'Introduction to Databases'();
    $course->save();
    return 'Course Created!';
});
