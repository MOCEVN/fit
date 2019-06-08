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

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

Route::get('goals', 'GoalController@index');

Route::view('about', 'about');
Route::view('profile', 'profile');

Route::resource('posts', 'PostController');

// Route::get('form', 'FormController@index');
// Route::get('form/create', 'FormController@create');
// Route::post('form', 'FormController@store');
// Route::get('form/{form}', 'FormController@show');
// Route::get('form/{form}/edit', 'FormController@edit');
// Route::patch('form/{form}', 'FormController@update');

Route::resource('form', 'FormController');



