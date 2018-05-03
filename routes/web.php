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
Route::get('member','PagesController@getMember');
Route::get('vacancy','PagesController@getVacancy');
Route::get('cinema','PagesController@getCinema');
Route::get('carrental','PagesController@getCarrental');
Route::get('mall','PagesController@getMalls');
Route::get('rooms','PagesController@getRooms');
Route::get('about','PagesController@getAbout');
Route::get('contact','PagesController@getContact');
Route::get('gallery','PagesController@getGallery' );

Route::get('/', 'PagesController@getIndex');
Route::get('menu','PagesController@getMenu' );
Route::get('reservation','PagesController@getReservation');

