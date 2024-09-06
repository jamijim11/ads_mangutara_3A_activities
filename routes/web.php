<?php

use App\Models\Student; 
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
    $student = new student();
    $student -> first_name = 'John';
    $student -> last_name = 'Doe';
    $student -> email = 'johndoe@xample.com';
    $student -> age = 22;
    $student ->save ();
    return 'Student created!';
});
Route::get('/Student', function (){
    $students = student::all();
    return $student;

});
Route::get('/Student/update', function () {
    $student = student::where('email', 'johndoe@example.com')->first();
    $student -> email = 'Johndoe@xample.com';
    $student -> age = 23;
    $student ->save();
    return 'Student Updated!';
});
Route::get('/Student/delete', function (){
    $student = student::where('email', 'johndoe@example.com')->first();
    $student ->delete();
    return 'Student Deleted!';
});
