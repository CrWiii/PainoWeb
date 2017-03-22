<?php

namespace App\Http\Controllers;
 
use App\Dates;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;


class DatesGuestController extends Controller{

    public function __construct(){
        $this->middleware('guest');
    }

	public function Calendar(){
        return view('Calendario');
    }

	public function api(){	
		$data = array();
		$dates = Dates::get();
		//$color = '#3a87ad';
		foreach ($dates as $d) {
			if($d->state=='PENDIENTE') {$color='#2f903b';}else{$color = '#3a87ad';}
			/*$data[] = array(
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
                'type' => $d->type);*/
			$data[] = array('title' => 'NO DISPONIBLE','start' => $d->startdate, "end" => $d->enddate, 'color'=>'#7f797b'); //
		}
		//dd($dates);
		return response()->json($data);
	}

    public function registerDate(Request $request){
        if($request->ajax()){
	   		$Dat = new Dates;
	   		$Dat->title = $request->fullname;
    		$Dat->startdate = date("Y-m-d H:i:s",strtotime($request->astrt));
    		$Dat->enddate = date("Y-m-d H:i:s",strtotime($request->aendt));
    		$Dat->asunt = '#7f797b';
    		$Dat->place = $request->phone;
            $Dat->description = $request->description;
    		$Dat->dni = $request->dni;
    		$Dat->state = 'PENDIENTE';
    		$Dat->mail = $request->email;
    		$Dat->save();
    	}
    }


}
