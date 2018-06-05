<?php

/*
|--------------------------------------------------------------------------
| Copyright Jingyi Su 2018
| suhiro@gmail.com 
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'ParticipantController@create')->name('register');

Route::post('/register', 'ParticipantController@store');
