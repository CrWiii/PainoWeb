<?php

namespace App\Http\Controllers;
 
use App\Dates;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ChangeLanguageController extends Controller{

	public function change($lang){
		//$lang = \Input::get('language');
		if($lang='2'){
			\Lang::setLocale('en');
		}elseif($lang='1'){
			\Lang::setLocale('es');
		}
		/*(config('app.locale')) = 
	    \Session::put('locale', $la);*/
	    return redirect('/');
	}
}
