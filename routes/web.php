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

Route::get('/', function () {
	Lang::setLocale('es');
    return view('welcome');
});
Route::get('/Calendario', 'DatesController@Calendar');
Route::resource('Dates','DatesController');
Route::get('api','DatesController@api');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('language/{lang}','ChangeLanguageController@change');

/*
https://forums.meteor.com/t/full-calendar-modal-with-multiple-event-details/11177
https://www.jqueryajaxphp.com/fullcalendar-crud-with-jquery-and-php/
https://www.codeproject.com/Articles/638674/Full-calendar-A-complete-web-diary-system-for-jQue
https://cdn.auth0.com/blog/laravel-auth/mvc-diagram.png
https://github.com/MikeSmithDev/FullCalModal-Node/tree/master/app
https://code.tutsplus.com/courses/build-a-cms-with-laravel

https://code.tutsplus.com/courses/build-a-cms-with-laravel
https://github.com/LavaLite/cms
https://github.com/ozdemirburak/laravel-5-simple-cms
http://www.lavalite.org/
https://pyrocms.com/
https://github.com/ozdemirburak/laravel-5-simple-cms
https://tympanus.net/Tutorials/InteractiveSVG/
https://tympanus.net/codrops/2013/02/06/interactive-infographic-with-svg-and-css-animations/#the-javascript

https://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar/2/

https://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar-part-2/2/

https://scotch.io/tutorials/ultimate-guide-on-sending-email-in-laravel

https://www.jqueryajaxphp.com/fullcalendar-crud-with-jquery-and-php/
https://github.com/Zizaco/entrust/tree/master#installation

http://jsfiddle.net/welnn/e2z0s43f/

https://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar/2/

https://github.com/CrWiii/startup
https://codyhouse.co/gem/horizontal-timeline/
https://codyhouse.co/demo/vertical-timeline/index.html

https://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar-part-3/
Hola Manuel, sorry la demora, te estoy adjuntando los logos de las marcas que sí van en la web. 
Algunas se han retirado. Arriba siempre las tres principales: Mikimoto, Patek y Mimí. Las otras marcas pueden ir abajo. Los logos deberían ir en esa tonalidad:
R: 103
G: 103
B: 103
Y con el mismo efecto que tenemos en la web actual. 
Las direcciones de abajo también tendrían que ir en esa tonalidad de texto, que es la misma del texto de las redes. 
Estoy poniendo en un word todos los apuntes. Se los envío hoy por la tarde.
Gracias!
Abrazo.
*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
