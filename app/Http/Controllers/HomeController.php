<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class HomeController extends Controller{
    
    public function __construct(){
        //$this->middleware('auth');
    }
    
    public function index(){
        return view('welcome');
    }
    public function Others(){
        return view('Otros');
    }
    public function Preguntas(){
        return view('PreguntasFrecuentes');
    }
    public function Noticias(){
        $news = News::where('state',1)->get();
        return view('Noticias', compact('news'));
    }
    public function language($lang, ChangeLocale $changeLocale){
        $lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
        $changeLocale->lang = $lang;
        $this->dispatch($changeLocale);
        return redirect()->back();
    }
}
