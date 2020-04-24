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
Route::resource('/students', 'StudentAdminController');
Route::get('/students/{student}/result', 'StudentAdminResultController@index')->name('results.index');
//Sem1 Student Admin Controller
Route::get('/students/{student}/result/sem1', 'Sem1\StudentAdminSem1Controller@index');
Route::resource('students.sem1Int', 'Sem1\StudentAdminSem1Int')->shallow();
Route::resource('students.sem1Ext', 'Sem1\StudentAdminSem1Ext')->shallow();
//"/admin/students/sem1/internalMarks"
//Sem2 Student Admin Controller
Route::get('/students/{student}/result/sem2', 'Sem2\StudentAdminSem2Controller@index');
Route::resource('students.sem2Int', 'Sem2\StudentAdminSem2Int')->shallow();
Route::resource('students.sem2Ext', 'Sem2\StudentAdminSem2Ext')->shallow();
//
//Sem3 Student Admin Controller
Route::get('/students/{student}/result/sem3', 'Sem3\StudentAdminSem3Controller@index');
Route::resource('students.sem3Int', 'Sem3\StudentAdminSem3Int')->shallow();
Route::resource('students.sem3Ext', 'Sem3\StudentAdminSem3Ext')->shallow();
//
//Sem4 Student Admin Controller
Route::get('/students/{student}/result/sem4', 'Sem4\StudentAdminSem4Controller@index');
Route::resource('students.sem4Int', 'Sem4\StudentAdminSem4Int')->shallow();
Route::resource('students.sem4Ext', 'Sem4\StudentAdminSem4Ext')->shallow();
//
//Sem5 Student Admin Controller
Route::get('/students/{student}/result/sem5', 'Sem5\StudentAdminSem5Controller@index');
Route::resource('students.sem5Int', 'Sem5\StudentAdminSem5Int')->shallow();
Route::resource('students.sem5Ext', 'Sem5\StudentAdminSem5Ext')->shallow();
//
//Sem6 Student Admin Controller
Route::get('/students/{student}/result/sem6', 'Sem6\StudentAdminSem6Controller@index');
Route::resource('students.sem6Int', 'Sem6\StudentAdminSem6Int')->shallow();
Route::resource('students.sem6Ext', 'Sem6\StudentAdminSem6Ext')->shallow();
//
//Sem7 Student Admin Controller
Route::get('/students/{student}/result/sem7', 'Sem7\StudentAdminSem7Controller@index');
Route::resource('students.sem7Int', 'Sem7\StudentAdminSem7Int')->shallow();
Route::resource('students.sem7Ext', 'Sem7\StudentAdminSem7Ext')->shallow();
//
//Sem8 Student Admin Controller
Route::get('/students/{student}/result/sem8', 'Sem8\StudentAdminSem8Controller@index');
Route::resource('students.sem8Int', 'Sem8\StudentAdminSem8Int')->shallow();
Route::resource('students.sem8Ext', 'Sem8\StudentAdminSem8Ext')->shallow();
//
Route::get('notification/read', 'StudentController@markRead')->name('markRead');
//
Route::resource('/staffs', 'StaffAdminController');

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