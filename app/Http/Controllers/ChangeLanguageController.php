<?php

namespace App\Http\Controllers;
 
use App\Dates;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ChangeLanguageController extends Controller{

	public function change($lang){
		//$lang = \Input::get('language');
		if($lang=1){
			\App::setLocale('en'); 
		}elseif($lang=2){
			\App::setLocale('es'); 
		}
		/*(config('app.locale')) = 
	    \Session::put('locale', $la);*/
	    return redirect('/');
	}
}
