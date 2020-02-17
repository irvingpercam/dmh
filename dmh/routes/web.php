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
Route::resource('productos', 'ProductController')->names('products')->parameters(['productos' => 'product']);
Route::resource('marcas', 'BrandController')->names('brands')->parameters(['marcas' => 'brand']);
Route::resource('categorias', 'CategoryController')->names('categories')->parameters(['categorias' => 'category']);
Route::resource('tipos', 'TypeController')->names('types')->parameters(['tipos' => 'type']);
Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');
Auth::routes(['register' => false]);
