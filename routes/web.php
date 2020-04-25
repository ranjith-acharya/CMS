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
Route::get('/students/sem1/internal/index', 'StudentAdminResultController@sem1Int');
Route::get('/students/sem1/external/index', 'StudentAdminResultController@sem1Ext');
Route::get('/students/sem2/internal/index', 'StudentAdminResultController@sem2Int');
Route::get('/students/sem2/external/index', 'StudentAdminResultController@sem2Ext');
Route::get('/students/sem3/internal/index', 'StudentAdminResultController@sem3Int');
Route::get('/students/sem3/external/index', 'StudentAdminResultController@sem3Ext');
Route::get('/students/sem4/internal/index', 'StudentAdminResultController@sem4Int');
Route::get('/students/sem4/external/index', 'StudentAdminResultController@sem4Ext');
Route::get('/students/sem5/internal/index', 'StudentAdminResultController@sem5Int');
Route::get('/students/sem5/external/index', 'StudentAdminResultController@sem5Ext');
Route::get('/students/sem6/internal/index', 'StudentAdminResultController@sem6Int');
Route::get('/students/sem6/external/index', 'StudentAdminResultController@sem6Ext');
Route::get('/students/sem7/internal/index', 'StudentAdminResultController@sem7Int');
Route::get('/students/sem7/external/index', 'StudentAdminResultController@sem7Ext');
Route::get('/students/sem8/internal/index', 'StudentAdminResultController@sem8Int');
Route::get('/students/sem8/external/index', 'StudentAdminResultController@sem8Ext');

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

Route::get('/student/result/{student}', 'StudentResultController@index')->name('student.result.index');
Route::get('/student/result/sem1/marks', 'StudentResultController@sem1')->name('student.result.sem1');
Route::get('/student/result/sem2/marks', 'StudentResultController@sem2')->name('student.result.sem2');
Route::get('/student/result/sem3/marks', 'StudentResultController@sem3')->name('student.result.sem3');
Route::get('/student/result/sem4/marks', 'StudentResultController@sem4')->name('student.result.sem4');
Route::get('/student/result/sem5/marks', 'StudentResultController@sem5')->name('student.result.sem5');
Route::get('/student/result/sem6/marks', 'StudentResultController@sem6')->name('student.result.sem6');
Route::get('/student/result/sem7/marks', 'StudentResultController@sem7')->name('student.result.sem7');
Route::get('/student/result/sem8/marks', 'StudentResultController@sem8')->name('student.result.sem8');

Route::get('/student/logout', 'Auth\StudentLoginController@logout')->name('student.logout');

//Routing for Staff
Route::get('/staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
Route::resource('/staff', 'StaffController');
Route::get('/staff/logout', 'Auth\StaffLoginController@logout')->name('staff.logout');

//