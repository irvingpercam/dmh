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

Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'about')->name('about');
Route::get('/productos', 'ProductController@index')->name('products.index');
Route::get('/productos/crear', 'ProductController@create')->name('products.create');
Route::get('/productos/{product}', 'ProductController@show')->name('products.show');
Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');