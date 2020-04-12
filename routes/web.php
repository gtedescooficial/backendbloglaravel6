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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/categories', 'CategoriesController@index')->name('categories')->middleware('verified');
Route::get('/categories/new', 'CategoriesController@create')->name('new-category')->middleware('verified');
Route::post('/categories/save', 'CategoriesController@store')->name('save-category')->middleware('verified');
Route::get('/users', 'UserController@index')->name('users')->middleware('verified');
Route::get('/subscriptions', 'SubscriptionsController@index')->name('subscriptions')->middleware('verified');
Route::get('/settings', 'PreferencesController@index')->name('settings')->middleware('verified');
Route::get('/posts', 'PostController@index')->name('posts')->middleware('verified');
Route::get('/posts/new', 'PostController@create')->name('new-post')->middleware('verified');
Route::post('/posts/save', 'PostController@store')->name('save-post')->middleware('verified');
