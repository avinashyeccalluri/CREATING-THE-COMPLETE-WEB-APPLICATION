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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main','MainController@main');
Route::get('/admin','AdminController@index');
Route::get('/user','UserController@index');
Route::post('/user','UserController@storesignup');
Route::post('/user/authenticate','UserController@authenticate');
Route::get('/user/signup','UserController@signup');
Route::get('/admin/signup','AdminController@signup');
Route::get('/user/authenticate/viewbooks','UserController@viewbooks');
Route::get('/user/authenticate/purchasebooks','UserController@purchasebooks');
Route::get('/user/logout','UserController@logout');

