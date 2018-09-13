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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::middleware('auth')->group(function() {

  Route::middleware('lock')->group(function() {

    Route::prefix('admin')->group(function() {

      Route::get('/', 'AdminController@index');
      Route::resource('banners', 'BannerController');

    });

    Route::get('/avatar', 'UsersController@avatar')->name('avatar');

  });

  Route::get('lockscreen', 'LockAccountController@lockscreen')->name('lockscreen');
  Route::post('lockscreen', 'LockAccountController@unlock')->name('post_lockscreen');

});
