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
/*
Route::get('/{lang}', function ($lang){
	if($lang=='en'){
			Lang::setLocale('en');
		}elseif($lang=='es'){
			Lang::setLocale('es');
		}
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('welcome');
});
/*
Route::post('changeLanguage', function(){
	if($request['lan1']=='en'){
		Lang::setLocale('en');
	}
	elseif($request['lan2']=='es'){
		Lang::setLocale('es');
	}
	return view('welcome');
});*/

Route::get('/Calendario', 'DatesController@Calendar');

Route::resource('Dates','DatesController');
Route::get('api','DatesController@api');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('registerDate','DatesController@registerDate');
Route::get('updateDate','DatesController@updateDate');
Route::get('removeDate','DatesController@removeDate');
Route::get('Otros','HomeController@Others');
Route::get('PreguntasFrecuentes','HomeController@Preguntas');
Route::get('Noticias','HomeController@Noticias');
