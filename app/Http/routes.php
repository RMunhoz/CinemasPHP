<?php

Route::get('/', ['as'=>'index', 'uses'=>'FrontController@index']);
Route::get('/contacto', ['as'=>'contacto', 'uses'=>'FrontController@contacto']);
Route::get('/reviews', ['as'=>'reviews', 'uses'=>'FrontController@reviews']);


