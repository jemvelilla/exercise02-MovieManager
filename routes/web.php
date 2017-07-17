<?php

use App\Http\Controllers\UserController;
Route::get('/', 'EntryController@index')->name('home'); //welcome page
Route::get('/show/{entry}', 'EntryController@show'); //show all entries (at the home page)
Route::get('/add', 'EntryController@create'); //redirect to add page
Route::get('/post', 'EntryController@store'); //store an entry
Route::post('/post', 'EntryController@store'); //store an entry
Route::get('/view/{entry}', 'EntryController@view'); //view a specific entry

Route::get('/genre/{genre}', 'GenreController@show'); //show entries by genre

Route::get('/entry_type/{type}', 'TypeController@show'); //show entries by type

Route::get('/home', 'UserController@index'); //authenticate if logged on
Route::post('/home', 'UserController@index'); //login
Route::get('/profile', 'UserController@index'); //display entries created by a logged on user

Route::get('/register', 'RegistrationController@store');
Route::post('/register', 'RegistrationController@store');

Route::get('login', 'SessionsController@create');
Route::post('login', [ 'as' => 'login', 'uses' => 'SessionsController@store']);
Route::get('/logout', 'SessionsController@destroy');

Route::post('/search', 'SearchController@index');
Route::get('/search', 'SearchController@index');
Route::get('/search/all', 'SearchController@find');
Route::get('/search/{actor}', 'SearchController@actor');