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
Route::resource('/student', 'StudentController');
//
Route::resource('/staff', 'StaffController');