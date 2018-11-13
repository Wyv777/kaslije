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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/adminpage', function () {
    return view('adminpage');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::resources([
        'categories' => 'Admin\CategoryController',
        'products' => 'Admin\ProductController'
    ]);
});

Route::get('/home', 'HomeController@index')->name('home');
