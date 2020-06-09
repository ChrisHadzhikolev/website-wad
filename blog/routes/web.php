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
Route::get('/','HomeController@show' );
Route::get('home/{loggedin}', 'HomeController@show');
Route::get('aboutUs/{loggedin}', 'AboutUsController@show');
Route::get('projects/{loggedin}', 'ProjectsController@show');
Route::get('contact', 'ContactController@getAll');
Route::get('users/{loggedin}', 'UsersController@show');
Route::get('registration/{loggedin}', 'RegistrationController@show');
Route::get('login/{loggedin}', 'LoginController@show');
Route::get('myProfile/{loggedin}', 'MyProfileController@show');


Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
