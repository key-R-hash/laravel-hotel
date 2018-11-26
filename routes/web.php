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



Route::get('/', "HotelController@hotel")->name('home');
Route::get('/room', "HotelController@room");
Route::get('/book', "HotelController@book");
Route::post('/book', "RoomController@create");
Route::get('/login', "RegistrationController@login");
Route::post('/login', "RegistrationController@loginvalidate");
Route::get('/admin', "HotelController@admin");
Route::post('/admin', "HotelController@admin");
Route::get('/cancel', "HotelController@cancel");
Route::get('/permition', "HotelController@permition");
Route::post('/bookvalidate', "HotelController@bookvalidate");
Route::post('/mydata', "HotelController@mydata");
Route::post('/roomselect', "HotelController@roomselect");
Route::get('/logout',"RegistrationController@destroy");
Route::get('/getcsv',"HotelController@getcsv");

//Route::get('/home', 'HomeController@index')->name('home');
