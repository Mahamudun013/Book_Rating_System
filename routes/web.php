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

Route::get('/','HomeController@index');

// Admin route
Route::get('/admin/login','AdminController@loginForm');
Route::post('/admin/auth','AdminController@adminLogin');
Route::get('/admin/home','AdminController@adminHome');
Route::get('/admin/logout','AdminController@adminLogout');

// User route
Route::get('/user/register','UserController@userRegisterForm');
Route::post('/user/save','UserController@saveUserInfo');
Route::get('/user/home','UserController@userHomeContent');
Route::get('/rating/submit','UserController@submitRating');

Route::get('/user/login','UserController@userLoginForm');
Route::post('/user/auth','UserController@userLogin');
Route::get('/user/logout','UserController@userLogOut');


Route::get('/book/add','BookController@addBook');
Route::post('/book/save','BookController@saveBookInfo');








