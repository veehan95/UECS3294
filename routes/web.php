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
Route::any('/', array( 'as' => 'home', 'uses' => 'HomeController@index' ));
Route::group([
  'middleware' => ['auth']
  ], function ()
  {
    Route::resource('/student', 'StudentController', ['except' => [
      'destroy',
      ]]);
    Route::resource('/teacher', 'TeacherController', ['except' => [
      'destroy',
      ]]);
    Route::resource('/class', 'TuitionClassController', ['except' => [
      'destroy',
      ]]);
    Route::post('/class', 'TuitionClassController@ctos')->name('class.ctos');
  }
);
Auth::routes();
