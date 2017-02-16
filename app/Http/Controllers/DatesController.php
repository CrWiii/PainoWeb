<?php

namespace App\Http\Controllers;
 
use App\Dates;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;


class DatesController extends Controller{

	public function Calendar(){
        return view('Calendario');
    }

	public function api(){	
		$data = array();
		$dates = Dates::get();
		//$color = '#3a87ad';
		foreach ($dates as $d) {
			if($d->state=='PENDIENTE') {$color='#2f903b';}else{$color = '#3a87ad';}
			$data[] = array('title' => $d->description,'start' => $d->startdate, "end" => $d->enddate, 'color'=>$color, 'id' => $d->id,'place' => $d->place, 'description' => $d->description, 'dni' => $d->DNI,'state' => $d->state,'mail' => $d->mail, 'asunt' => $d->asunt, 'type' => $d->type);
			//$data[] = array('title' => 'NO DISPONIBLE','start' => $d->startdate, "end" => $d->enddate, 'color'=>'#7f797b'); //	
		}
		//dd($dates);
		return response()->json($data);
	}

    public function registerDate(Request $Request){
    	if($Request->ajax()){
	   		$Dat = new Dates;
	   		$Dat->title = $request->patientName;
    		$Dat->start = $request->apptStartTime;
    		$Dat->end = $request->apptEndTime;
    		$Dat->color = '#3a87ad';
    		$Dat->place = $request->phone;
    		//$Dat->description = $request->;
    		$Dat->dni = $request->dni;
    		$Dat->state = $request->'PROGRAMADO';
    		$Dat->mail = $request->email;
    		//$Dat->asunt = $request->;
    		//$Dat->type = $request->;
    		$Dat->save();
    	}

    }

    public function updateDate(){
    	
    }

    public function deteleDate(){

    }
}
