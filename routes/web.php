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
Route::get('/admin/students/result/{studentID}', 'StudentAdminResultController@index')->name('results.index');
//Sem1 Student Admin Controller
Route::get('/admin/students/result/sem1/{studentID}', 'Sem1\StudentAdminSem1Controller@index');
Route::resource('/admin/students/sem1/internalMarks', 'Sem1\StudentAdminSem1Int');
Route::resource('/admin/students/sem1/externalMarks', 'Sem1\StudentAdminSem1Ext');
//
//Sem2 Student Admin Controller
Route::get('/admin/students/result/sem2/{studentID}', 'Sem2\StudentAdminSem2Controller@index');
Route::resource('/admin/students/sem2/internalMarks', 'Sem2\StudentAdminSem2Int');
Route::resource('/admin/students/sem2/externalMarks', 'Sem2\StudentAdminSem2Ext');
//
//Sem3 Student Admin Controller
Route::get('/admin/students/result/sem3/{studentID}', 'Sem3\StudentAdminSem3Controller@index');
Route::resource('/admin/students/sem3/internalMarks', 'Sem3\StudentAdminSem3Int');
Route::resource('/admin/students/sem3/externalMarks', 'Sem3\StudentAdminSem3Ext');
//
//Sem4 Student Admin Controller
Route::get('/admin/students/result/sem4/{studentID}', 'Sem4\StudentAdminSem4Controller@index');
Route::resource('/admin/students/sem4/internalMarks', 'Sem4\StudentAdminSem4Int');
Route::resource('/admin/students/sem4/externalMarks', 'Sem4\StudentAdminSem4Ext');
//
//Sem5 Student Admin Controller
Route::get('/admin/students/result/sem5/{studentID}', 'Sem5\StudentAdminSem5Controller@index');
Route::resource('/admin/students/sem5/internalMarks', 'Sem5\StudentAdminSem5Int');
Route::resource('/admin/students/sem5/externalMarks', 'Sem5\StudentAdminSem5Ext');
//
//Sem6 Student Admin Controller
Route::get('/admin/students/result/sem6/{studentID}', 'Sem6\StudentAdminSem6Controller@index');
Route::resource('/admin/students/sem6/internalMarks', 'Sem6\StudentAdminSem6Int');
Route::resource('/admin/students/sem6/externalMarks', 'Sem6\StudentAdminSem6Ext');
//
//Sem7 Student Admin Controller
Route::get('/admin/students/result/sem7/{studentID}', 'Sem7\StudentAdminSem7Controller@index');
Route::resource('/admin/students/sem7/internalMarks', 'Sem7\StudentAdminSem7Int');
Route::resource('/admin/students/sem7/externalMarks', 'Sem7\StudentAdminSem7Ext');
//
//Sem8 Student Admin Controller
Route::get('/admin/students/result/sem8/{studentID}', 'Sem8\StudentAdminSem8Controller@index');
Route::resource('/admin/students/sem8/internalMarks', 'Sem8\StudentAdminSem8Int');
Route::resource('/admin/students/sem8/externalMarks', 'Sem8\StudentAdminSem8Ext');
//
Route::resource('/admin/staffs', 'StaffAdminController');

Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('admin.logout');

//Routing for Student
Route::get('/student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('/student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');
Route::resource('/student', 'StudentController');

Route::get('/student/logout', 'Auth\StudentLoginController@logout')->name('student.logout');

//Routing for Staff
Route::get('/staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
Route::resource('/staff', 'StaffController');
Route::get('/staff/logout', 'Auth\StaffLoginController@logout')->name('staff.logout');

//