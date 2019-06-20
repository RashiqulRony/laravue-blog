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


Route::get('/', 'WebsiteController@index');


//Admin Panel
Route::get('/admin/dashboard', 'AdminController@index')->name('home');
Route::get('/admin/blogs', 'AdminController@blogs');
Route::get('/admin/blog/add', 'AdminController@blogAdd');
Route::post('/admin/blog/store', 'AdminController@blogStore');
Route::get('/admin/blog/edit/{slug}', 'AdminController@blogEdit');
Route::post('/admin/blog/update/{id}', 'AdminController@blogUpdate');
Route::get('/admin/blog/delete/{slug}', 'AdminController@blogDelete');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get( '/{vue_route?}', 'WebsiteController@index' )->where( 'vue_route', '(.*)' );

