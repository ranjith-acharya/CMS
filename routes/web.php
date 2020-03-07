<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
//
Route::get('/home/student', 'HomeController@studentIndex');
//
Route::get('/home/staff', 'HomeController@staffIndex');
//
Route::resource('/student/result', 'ResultsController');
Route::resource('/student/result/sem3', 'Sem\Sem3Controller');
//
Route::get('/student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('/student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');
Route::resource('/student', 'StudentController');
//
Route::get('/staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
Route::resource('/staff', 'StaffController');