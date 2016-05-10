<?php

Route::get('/', ['as'=>'index', 'uses'=>'FrontController@index']);
Route::get('contacto', ['as'=>'contacto', 'uses'=>'FrontController@contacto']);
Route::get('reviews', ['as'=>'reviews', 'uses'=>'FrontController@reviews']);
Route::get('admin', ['as'=>'admin', 'uses'=>'FrontController@admin']);

Route::get('user/destroy/{id}', ['as'=>'user.destroy', 'uses'=>'UsersController@destroy']);

Route::resource('user', 'UsersController');
Route::resource('genero', 'GeneroController');

Route::resource('log', 'LogController');
Route::get('logout', ['as'=> 'logout', 'uses'=>'LogController@logout']);




