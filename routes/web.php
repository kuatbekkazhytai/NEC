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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@welcome')->name('welcome');


Auth::routes();

Route::post('application/store', 'ApplicationController@store')->name('application.store');
Route::post('application/save-request', 'ApplicationController@saveRequest')->name('application.save-request');

Route::group(['middleware' => ['auth']], function () {

    Route::get('home', 'HomeController@index')->name('home');

    Route::get('application', 'ApplicationController@index')->name('application.index');
    Route::get('application/{application}', 'ApplicationController@view')->name('application.view');

    Route::get('teacher', 'TeacherController@index')->name('teacher.index');
    Route::get('teacher/create', 'TeacherController@create')->name('teacher.create');
    Route::post('teacher/store', 'TeacherController@store')->name('teacher.store');
    Route::get('teacher/{teacher}', 'TeacherController@view')->name('teacher.view');
    Route::get('teacher/edit/{teacher}', 'TeacherController@edit')->name('teacher.edit');
    Route::delete('teacher/delete/{teacher}', 'TeacherController@delete')->name('teacher.delete');

    Route::get('course', 'CourseController@index')->name('course.index');
    Route::get('course/create', 'CourseController@create')->name('course.create');
    Route::post('course/store', 'CourseController@store')->name('course.store');
    Route::get('course/{course}', 'CourseController@view')->name('course.view');
    Route::get('course/edit/{course}', 'CourseController@edit')->name('course.edit');
    Route::delete('course/delete/{course}', 'CourseController@delete')->name('course.delete');
});