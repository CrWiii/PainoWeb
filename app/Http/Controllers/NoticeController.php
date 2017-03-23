<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \Database\Query\Builder;
use App\News;

class NoticeController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $news = News::where('state',1)->get();
        return Response($news);
    }
    
    public function create(){
        
    }
    public function delete(){
        
    }
    public function edit(Request $request){
        //$new = News::findOrFail($request->id);
        if($request->id=='1'){
            $new = array('title'=> 'first new','description' => 'asdkjfhasdfjkhaskjfhasdhgf asdgfasjd fasjdhgf ajksgfjk ashg dfjasghfjk asgdfjkasdf');
        }
    return Response($new);
    }
    public function update(Request $request){
        if (\Auth::guest()){
        }else{
            if($request->ajax()){

                /*if($request->hasFile('profilePic')){
                    $file = array('profilePic' => Input::file('profilePic'));
                    $destinationPath = 'img/'; // upload path
                    $extension = Input::file('profilePic')->getClientOriginalExtension(); 
                    $fileName = rand(11111,99999).'.'.$extension; // renaming image
                    Input::file('profilePic')->move($destinationPath, $fileName);
                }*/

                $affectedRows = News::where('id',$request->id)->update(array(
                    'title' => $request->title,
                    'description' => $request->description,
                    //'img' => ,
                    'state' => 1,
                    'user_id' => \Auth::user()->id,
                    ));
            }
        }
    }
    public function show(){
        
    }
    
}
