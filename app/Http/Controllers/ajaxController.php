<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidate_persnal_info;
use App\Models\applications;
use App\Models\miscellaneous;
use App\Models\universities;
use App\Models\programs;
use App\Models\agents;
use App\Models\admin;

class ajaxController extends Controller
{
   
   
   
   

	
	 public function programs_list(Request $input)
    { 
	    $miscellaneous = miscellaneous::get(); 
	    $outpucode  =  '<select class="form-control"  data-choices data-choices-search-false name="program" id="passedYear">';
        $outpucode  .=  ' <option value="" >Select </option>';                                           
        $records = programs::where('University','=',$input->u)->where('Category','=',$input->c)->get();                                                         
        foreach($records as $item){  
			$mis = miscellaneous::find($item->Title);
		$outpucode  .=  ' <option value="'.$item->id.'" >'.$mis->title.' </option>';  
		}
		$outpucode  .=  '</select>';
			
		
		return $outpucode;
		
		
    }
   
   
   
  
   
}
