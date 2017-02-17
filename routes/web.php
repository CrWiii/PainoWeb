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

/*Route::get('/{lang}', function ($lang) {
	if($lang=='en'){
			Lang::setLocale('en');
		}elseif($lang=='es'){
			Lang::setLocale('es');
		}
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Calendario', 'DatesController@Calendar');

Route::resource('Dates','DatesController');
Route::get('api','DatesController@api');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::post('registerDate','DatesController@registerDate');

Route::get('Otros','HomeController@Others');