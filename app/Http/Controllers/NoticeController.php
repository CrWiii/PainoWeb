<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use \Database\Query\Builder;


class NoticeController extends Controller{
    
    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        $news = News::where('state',1)->get();
        return Response($news);
    }
    
    public function create(Request $request){ //'title','description','state','img','created_by','user_id'
         if (\Auth::guest()){
        }else{
            if($request->ajax()){
                $New = new News;
                $New->title = $request->title;
                $New->description = $request->description;
                $New->img = '/images/template.jpg';
                $New->state = 1;
                $New->created_by = 'Javier Paino';
                $New->user_id = \Auth::user()->id;
                $New->save();
            }
        }     
    }
    public function delete(){
        
    }
    public function edit(Request $request){
        //$new = News::findOrFail($request->id);
        if($request->id=='1'){
            $new = array('title'=> 'first new','description' => 'asdkjfhasdfjkhaskjfhasdhgf asdgfasjd fasjdhgf ajksgfjk ashg dfjasghfjk asgdfjkasdf');
        }
        if($request->id=='2'){
            $new = array('title'=> 'second new','description' => 'ggggggggggggggggggg gggggggggggggggggg gggggggggggggg ggggggggggggggggggggggggggggggg ');
        }
        if($request->id=='3'){
            $new = array('title'=> 'trhreee new','description' => 'fffffffffffffffffff fffffffffffffffffffffff fffffffffffffffff ffffffffffffffffffffffffffff ');
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
