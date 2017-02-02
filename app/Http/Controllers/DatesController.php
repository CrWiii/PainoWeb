<?php

namespace App\Http\Controllers;
 
use App\Dates;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DatesController extends Controller{

	public function api(){
		
		$data = array();
		$dates = Dates::get();
		$count = Dates::count();
		//$color = '#3a87ad';
		foreach ($dates as $d) {
			//if($d->state=='PENDIENTE') {$color='#2f903b';}else{$color = '#3a87ad';}
			//$data[] = array('title' => $d->description,'start' => $d->startdate, "end" => $d->enddate, 'color'=>$color); //	
			$data[] = array('title' => 'NO DISPONIBLE','start' => $d->startdate, "end" => $d->enddate, 'color'=>'#7f797b'); //	
		}
		//dd($dates);
		return response()->json($data);
	}
}
