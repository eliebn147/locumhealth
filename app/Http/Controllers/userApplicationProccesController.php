<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidate_persnal_info;
use App\Models\applications;
use App\Models\miscellaneous;
use App\Models\universities;
use App\Models\programs;


class userApplicationProccesController extends Controller
{
   public function my_applications(Request $input)
    { 
	
	
	 $values  =  array();
	    
	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['records_lst'] = applications::where('applicant',session()->get('user_id'))->get();
	
        return view('users.myapplication',['values'=>$values]);
    } 
	
	
	   public function save_application(Request $input)
    { 
         if(isset($input->rec_id))
		{
			$rec_item  = applications::find($input->rec_id);
			$input->session()->flash('success_message', 'Record  updated  successfully!');
		}else{
		$rec_item  =  new applications;
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		}	
	
	    $rec_item->applicant  =  session()->get('user_id');
		$rec_item->date  =  date('Y-m-d');
		$rec_item->status  =  "Submitted";
		$rec_item->program  =  $input->program ;
		$rec_item->university  =  $input->university ;
		$rec_item->name  =  $input->name ;
		$rec_item->email  =  $input->email ;
		$rec_item->phone  =  $input->phone ;
		$rec_item->whatsapp  =  $input->whatsapp ;
		$rec_item->Passport  =  $input->Passport ;
		$rec_item->country  =  $input->country ;
		$rec_item->last_qualification  =  $input->last_qualification ;
		$rec_item->last_year  =  $input->last_year ;
		$rec_item->percentage  =  $input->percentage ;
		$rec_item->uniq_shufl  =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,22).time();
		
		$rec_item->save();
		

	
         return redirect('my-applications');
    } 
	
	
	
	
	   public function change_status(Request $input)
    { 
         $input->session()->flash('success_message', 'Record status has been updated!');
	    $rec_item  = applications::find($input->app_id);
	   
		$rec_item->status  =  $input->status;
		
		$rec_item->save();
		
   
	
	    	$email_to = $input->app_email; 
$email_from = 'noreply@studynortherncyprus.com'; //website email address
$webiste_name = 'Studynortherncyprus';
$subject =  "Your application status has been Updated";
$message = '
<center>

<p >Dear student '.$input->app_name.' Your application status has been updated. now your application status is '.$input->status.'  </p>
</center>
 ';
   return $this->email("home",$email_to, $webiste_name, $email_from, $subject, $message);
	
	
         
    }


   	  function email($redirect,$to, $from_name, $from_email, $subject, $message, $contentType = "html", $to_cc = null, $to_bcc = null)
{
  $contentType = "html";
    $headers = "From: \"$from_name\" <" . $from_email . ">\r\n";
    $headers .= "Reply-To: \"$from_name\" <$from_email>\r\n";
    if ($to_cc != null) {
        $headers .= "CC: $to_cc\r\n";
    }
    if ($to_bcc != null) {
        $headers .= "BCC: $to_bcc\r\n";
    }
    $headers .= "X-Sender: \"$from_name\" <$from_email>\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    if ($contentType == "plain")
        $headers .= 'Content-type: text/plain;' . "\r\n";
    else
        $headers .= 'Content-type: text/html;' . "\r\n";
    $headers .= "X-Priority: 3\n";
    
   $retval =  mail($to, $subject, $message, $headers);
  
    
    
         if( $retval == true ) {
          
          return redirect($redirect);
        
      }else{
      
          return redirect($redirect);
    }
}	
	
}
