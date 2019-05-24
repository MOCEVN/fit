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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});


// Route::get('about', 'about');
// Route::get('contact', 'contact');
// Route::get('goals', 'goals');
// Route::get('profile', 'profile');

Route::get('form', 'FormController@index');
Route::get('form/create', 'FormController@create');
Route::post('form', 'FormController@store');
Route::get('form/{form}', 'FormController@show');

