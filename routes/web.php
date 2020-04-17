<?php

use Illuminate\Support\Facades\Route;

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

//Routing for Admin
Route::resource('/home', 'HomeController');
Route::resource('/admin/students', 'StudentAdminController');
Route::get('/admin/students/results/{results}', 'StudentAdminResultController@index')->name('results.index');
Route::get('/admin/students/results/sem6/{results}', 'Sem6\StudentAdminSem6@sem6Index');
Route::resource('/admin/students/results/sem6/{results}/internalMarks', 'Sem6\StudentAdminSem6Int');
Route::resource('/admin/students/results/sem6/{results}/externalMarks', 'Sem6\StudentAdminSem6Ext');

Route::resource('/admin/staffs', 'StaffAdminController');

Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('admin.logout');

//Routing for Student
Route::get('/student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('/student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');
Route::resource('/student', 'StudentController');
Route::get('/student/result/{result}', 'StudentResultController@studentResult')->name('student.results.index');
Route::get('/student/logout', 'Auth\StudentLoginController@logout')->name('student.logout');

//Routing for Staff
Route::get('/staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
Route::resource('/staff', 'StaffController');
Route::get('/staff/logout', 'Auth\StaffLoginController@logout')->name('staff.logout');

//