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

Route::get('/', 'PagesController@home');
Route::get('/about_vit', 'PagesController@about_vit');
Route::get('/college_page', 'PagesController@college_page');
Route::get('/hostel_page', 'PagesController@hostel_page');
Route::get('/events', 'PagesController@events');
Route::get('/news', 'PagesController@news');

Route::resource('data', 'DataController');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');



