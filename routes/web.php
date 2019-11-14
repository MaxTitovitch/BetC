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

// Main functional
Route::get('/', 'WelcomeController@index');
Route::get('/category/{sport_id}/{country_id?}', 'CategoryController@index');
Route::get('/news/{id}', 'ArticleController@show');

// Live
Route::get('/show-live', 'LiveViewControllerller@index');
Route::get('/show-tv', 'TVControllerller@index');

// About
Route::get('/about', 'AboutController@index');
Route::get('/contacts', 'ContactController@index');


// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin
