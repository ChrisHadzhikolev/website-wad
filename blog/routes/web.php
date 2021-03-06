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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/contact/add', 'IndexController@getAddContact');
Route::post('/contact/add', 'IndexController@postAddContact');
Route::get('/contact/{id}', 'IndexController@getContact');
Route::get('/myProfile', 'MyProfileController@index');
Route::get('/users', 'UsersController@index');
//Route::post('/myProfile', 'UsersController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
