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
Route::get('/', 'ListingsController@index');
Route::get('/new', 'ListingsController@new')->name('new');
Route::post('/listings', 'ListingsController@store');
Route::get('/listings/edit/{listing_id}', 'ListingsController@edit');
Route::post('/listings/edit', 'ListingsController@update');
Route::get('/listings/delete/{listing_id}', 'ListingsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('listing/{listing_id}/card/new', 'CardsController@new')->name('new_card');
Route::post('/listing/{listing_id}/card', 'CardsController@store');
Route::get('/listing/{listing_id}/card/{card_id}', 'CardsController@show');
Route::get('/listing/{listing_id}/card/{card_id}/edit', 'CardsController@edit');
Route::post('/card/edit', 'CardsController@update');
Route::get('/listing/{listing_id}/card/{card_id}/delete', 'CardsController@destroy');