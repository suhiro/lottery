<?php

/*
|--------------------------------------------------------------------------
| Copyright Jingyi Su 2018
| suhiro@gmail.com 
|
*/

Route::get('/', 'IndexController@index')->name('home');

Route::get('/participant_register', 'ParticipantController@create')->name('participantRegister');

Route::post('/participant_register', 'ParticipantController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('adminHome');
Route::get('/terms','ParticipantController@terms')->name('terms');

Route::middleware('auth')->group(function(){
	Route::get('/prizes', 'PrizeController@index')->name('prizes');
	Route::get('/winners', 'WinnerController@index')->name('winners');
	Route::get('/prize/{id}/generate','PrizeController@update');
	Route::get('/lotteries/','LotteryController@index')->name('lotteries');
	Route::get('/lottery/{id}/open','LotteryController@open');
	Route::get('/lottery/{id}/close','LotteryController@close');

});

