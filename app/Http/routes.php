<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LoginController@index');
Route::get('courseDetail','StudentController@courseDetail');
Route::get('search','StudentController@search');
Route::get('addComment','StudentController@addComment');
Route::get('viewComment','StudentController@viewComment');
Route::get('viewAlumnusComment','StudentController@viewAlumnusComment');
Route::get('courseList','StudentController@courseList');
Route::get('courseList','StudentController@courseList');
Route::get('login', 'AdminController@login');
Route::get('admin','AdminController@admin');
Route::get('addUser','AdminController@adminAdd');
Route::get('updateStatus','AdminController@updateStatus');
Route::get('addStudent','AdminController@addStudent');
Route::get('addCourse','AdminController@addCourse');
Route::get('addSection','AdminController@addSection');
Route::get('updateSection','AdminController@updateSection');
Route::get('profileA','AdminController@profile');
Route::get('profileU','StudentController@profile');
Route::get('showAllStudiedCourse','RegistrationController@showAllStudiedCourse');
Route::get('showStudyingCourse','RegistrationController@showStudyingCourse');
Route::get('showTeachingCourse','RegistrationController@showTeachingCourse');
Route::get('showAllTaughtCourse','RegistrationController@showAllTaughtCourse');
Route::post('addStudentToCourse','RegistrationController@addStudentToCourse');
Route::post('addTeacherToCourse','RegistrationController@addTeacherToCourse');
Route::post('editStudentInCourse','RegistrationController@editStudentInCourse');
Route::post('authenticate', 'Auth\AuthController@authenticate');
Route::get('showProfile','UserController@showProfile');
Route::post('addUser','UserController@addUser');
Route::get('addEvent','AdminController@addEvent');
Route::get('addEventU','StudentController@addEvent');
Route::get('sectionDetail','StudentController@sectionDetail');
