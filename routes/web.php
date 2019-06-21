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

Auth::routes();

Route::view('/', 'home')->name('index');
Route::get('home', 'HomeController@index');

// Route::post('contact', 'ContactController@create');
// Route::get('contact', 'ContactController@store');
Route::resource('contact', 'ContactController');

Route::get('workout', 'WorkoutController@index');

Route::view('about', 'about');

// Route::get('form', 'FormController@index');
// Route::get('form/create', 'FormController@create');
// Route::post('form', 'FormController@store');
// Route::get('form/{form}', 'FormController@show');
// Route::get('form/{form}/edit', 'FormController@edit');
// Route::patch('form/{form}', 'FormController@update');

Route::resource('form', 'FormController');



