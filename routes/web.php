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


Route::get('/', function () {
    return view('welcome');
});*/

/*Main navigation menu*/
Route::get('/', 'PagesController@index');
Route::get('/Dashboard', 'PagesController@Dashboard');
Route::get('/Courses', 'PagesController@Courses');
Route::get('/EnrolledCourses', 'PagesController@EnrolledCourses');
Route::get('/ProgressReport', 'PagesController@ProgressReport');
Route::get('/tutors', 'PagesController@Tutors');

Auth::routes();

Route::get('/index', 'PagesController@index');
