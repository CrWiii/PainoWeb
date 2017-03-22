<?php

namespace App\Http\Controllers;
 
use App\Dates;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;


class DatesController extends Controller{

    public function __construct(){
       //$this->middleware('auth');
    }

	public function Calendar(){
        return view('Calendario');
    }

	public function api(){
		$data = array();
		$dates = Dates::get();
		//$color = '#3a87ad';

        foreach ($dates as $d) {
            if (\Auth::guest()){
                $data[] = array('title' => 'NO DISPONIBLE','start' => $d->startdate, "end" => $d->enddate, 'color'=>'#7f797b');
            }else{
                if($d->state=='PENDIENTE') {$color='#2f903b';}else{$color = '#3a87ad';}
                $data[] = array(
                    'title' => $d->title,
                    'start' => $d->startdate,
                    'end' => $d->enddate,
                    'color'=>$color,
                    'id' => $d->id,
                    'place' => $d->place,
                    'description' => $d->description,
                    'dni' => $d->DNI,
                    'state' => $d->state,
                    'mail' => $d->mail,
                    'asunt' => $d->asunt,
                    'type' => $d->type);
            }
        }
		//dd($dates);
		return response()->json($data);
	}

    public function registerDate(Request $request){
        if (\Auth::guest()){
            if($request->ajax()){
                $Dat = new Dates;
                $Dat->title = $request->fullname;
                $Dat->startdate = date("Y-m-d H:i:s",strtotime($request->astrt));
                $Dat->enddate = date("Y-m-d H:i:s",strtotime($request->aendt));
                $Dat->asunt = '#3a87ad';
                $Dat->place = $request->phone;
                $Dat->description = $request->description;
                $Dat->dni = $request->dni;
                $Dat->state = 'PENDIENTE';
                $Dat->mail = $request->email;
                $Dat->save();
            }

        }else{
            if($request->ajax()){
                $Dat = new Dates;
                $Dat->title = $request->fullname;
                $Dat->startdate = date("Y-m-d H:i:s",strtotime($request->astrt));
                $Dat->enddate = date("Y-m-d H:i:s",strtotime($request->aendt));
                $Dat->asunt = '#3a87ad';
                $Dat->place = $request->phone;
                $Dat->description = $request->description;
                $Dat->dni = $request->dni;
                $Dat->state = 'PROGRAMADO';
                $Dat->mail = $request->email;
                $Dat->save();
            }
        }
    }

    public function updateDate(Request $request){
        if (\Auth::guest()){
            //return recdirect()->back();
        }else{
            if($request->ajax()){
                $affectedRows = Dates::where('id',$request->id)->update(array(
                    'startdate' => date("Y-m-d H:i:s",strtotime($request->start)),
                    'enddate' => date("Y-m-d H:i:s",strtotime($request->end))
                    ));
            }

        }
    }

    public function removeDate(Request $request){
        if (\Auth::guest()){
            //return recdirect()->back();
        }else{
            if($request->ajax()){
                $id = $request->eventid;
                $da = Dates::destroy($id);
            }
        }
    }

    public function approveDate(Request $request){
        if (\Auth::guest()){
        }else{
            if($request->ajax()){
                $affectedRows = Dates::where('id',$request->eventid)->update(array('state' => 'PROGRAMADO'));
            }
            return response($affectedRows);
        }

    }
}
