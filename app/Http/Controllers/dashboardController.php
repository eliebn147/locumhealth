<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidate_persnal_info;
use App\Models\applications;
use App\Models\miscellaneous;
use App\Models\universities;
use App\Models\programs;



class dashboardController extends Controller
{
    
   	 public function adminhome()
    {
		  $values  =  array();
	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['programs'] = programs::get();
	   $values['records_lst'] = applications::get();
		
		 
		
		
        return view('admin.home',['values'=>$values]);
	
    }
}
