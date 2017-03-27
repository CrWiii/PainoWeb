<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use \Database\Query\Builder;
use Validator;

class NoticeController extends Controller{
    
    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        $news = News::where('state',1)->orderBy('id','DESC')->get();
        return Response($news);
    }
    public function create(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
          ]);

        if ($validator->passes()) {
            $input = $request->all();
            $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/blog'), $input['image']);

            $New = new News;
                $New->title = $request->title;
                $New->description = $request->description;
                $New->img = '/images/blog/'.time().'.'.$request->image->getClientOriginalExtension();//'/images/template.jpg';
                $New->state = 1;
                $New->created_by = 'Javier Paino';
                $New->user_id = \Auth::user()->id;
                $New->save();

            //return response()->json(['success'=>'done']);
            return Redirect('Noticias');
        }
        //return response()->json(['error'=>$validator->errors()->all()]);
    
    }

    public function ff(Request $request){ //'title','description','state','img','created_by','user_id'
         if (\Auth::guest()){
        }else{
            /*
            // getting all of the post data
            $file = array('image' => Input::file('image'));
            // setting up rules
            $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
            // doing the validation, passing post data, rules and the messages
            $validator = Validator::make($file, $rules);
            if($validator->fails()){
            // send back to the page with the input data and errors
                //return Redirect::to('upload')->withInput()->withErrors($validator);
                Session::flash('error', 'Upload Fail'); 
            }else{
                // checking file is valid.
                if(Input::file('image')->isValid()){
                    $destinationPath = 'blog'; // upload path
                    $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                    $fileName = rand(11111,99999).'.'.$extension; // renameing image
                    Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                    // sending back with message
                    Session::flash('success', 'Upload successfully'); 
                    //return Redirect::to('upload');
                }else{
                    // sending back with error message.
                    Session::flash('error', 'uploaded file is not valid');
                    //return Redirect::to('upload');
                }
            }

            */

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
    public function delete(Request $request){
        if (\Auth::guest()){
            //return recdirect()->back();
        }else{
            if($request->ajax()){
                $id = $request->id;
                $new = News::destroy($id);
            }
        }
        
    }
    public function edit(Request $request){
        $new = News::findOrFail($request->id);
    return Response($new);
    }
    public function update(Request $request){
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
          ]);
        $imgfu = '';
        $New = News::findOrFail($request->id);
        if ($validator->passes()) {
            $input = $request->all();
            if(!empty($request->image)){
                $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/blog'), $input['image']);
                $imgfu = '/images/blog/'.time().'.'.$request->image->getClientOriginalExtension();
            }else{
                $imgfu = $New->img;
            }
            

            
                $New->title = $request->title;
                $New->description = $request->description;
                $New->img = $imgfu;
                $New->state = 1;
                $New->created_by = 'Javier Paino';
                $New->user_id = \Auth::user()->id;
                $New->update();

            return response()->json(['success'=>'done']);
            //return Redirect('Noticias');
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

}
