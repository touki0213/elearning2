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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile/update', 'HomeController@profile_update')->name('profile_update');

Route::get('/categories/list', 'CategoryController@categories_list')->name('categories_list');
Route::get('/category/create', 'CategoryController@category_create')->name('category_create');
Route::post('/category/store', 'CategoryController@category_store')->name('category_store');
Route::get('/category/{cate}/edit', 'CategoryController@category_edit')->name('category_edit');
Route::post('/category/{cate}/update', 'CategoryController@category_update')->name('category_update');
Route::post('/category/{cate}/delete', 'CategoryController@category_delete')->name('category_delete');