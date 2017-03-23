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




	Route::get('/', function() {return view('welcome');});
	Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
	Route::get('Otros','HomeController@Others');
	Route::get('PreguntasFrecuentes','HomeController@Preguntas');
	Route::get('Noticias','HomeController@Noticias');
	Route::get('api2','DatesGuest@api');


Route::group(['middleware' => 'web'], function(){
	Route::auth();
	Route::get('registerDate','DatesController@registerDate');
	Route::get('updateDate','DatesController@updateDate');
	Route::get('approveDate','DatesController@approveDate');
	Route::get('removeDate','DatesController@removeDate');
	Route::get('api','DatesController@api');
	Route::get('/Calendario', 'DatesController@Calendar');
	Route::resource('Dates','DatesController');
	Route::get('/home', 'HomeController@index');

	Route::get('newsList','NoticeController@index');
	Route::resource('News','NoticeController');
	Route::get('registerNew','NoticeController@create');
	Route::get('editNew','NoticeController@edit');
	Route::get('updateNew','NoticeController@update');

});