<?php

Route::get('/', 'EntryController@index');

Route::get('/show/{entry}', 'EntryController@show');

Route::get('/view/{type}', 'EntryController@showType');

Route::post('home', 'UserController@index');

Route::get('profile', 'UserController@index');

Route::get('add', 'UserController@add');

Route::post('post', 'EntryController@store');

