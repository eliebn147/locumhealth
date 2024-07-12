<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\miscellaneous;
use App\Models\jobs_list;
use App\Models\programs;
use App\Models\tb_posts;
use App\Models\cvs;  
use App\Models\submited_Vacancy;
class webPagesController extends Controller
{
	
	   public function refer_friend(Request $input)
    { 
	  
			$name  =  $input->name ;
		    $email  =  $input->email ;
		    $phone  =  $input->phone ;
		    $message  =  $input->message ;
		
	  
		$email_to = "applications@locumhealthuk.com";
$email_from = 'noreply@locumhealthuk.com'; //website email address
$webiste_name = 'Locumhealthuk';
$subject =  "Refer a friend";
$message = '
<center>
<p> Friend Name: '.$name.'<br> Friend Email: '.$email.'<br> Phone: '.$phone.'<br> Message: '.$message.'</p>
</center>
 ';
		
	
		 return $this->email($input->redirect_url,$email_to, $webiste_name, $email_from, $subject, $message);
	
    }
	
      public function apply_job(Request $input)
    { 
	    $sufll =   substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,8);
        $recd  =  new cvs;
	    $input->session()->flash('success_message', 'Your Application received.please wait out team will contact you');
		
		$recd->name  =  $input->name ;
		$recd->email  =  $input->email ;
		$recd->phone  =  $input->phone ;
		$recd->message  =  $input->message ;
		$recd->vacancies_type  = $input->job_id ;
		
		
	    if($input->hasfile('cv_file')){
            $selected_pic = $input->file('cv_file');
            $extension = $selected_pic->getClientOriginalExtension();
            $doc_01 =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $recd->cv_file =  $doc_01 ;
            $selected_pic->move('upload/',$doc_01);
           }   
		$recd->save();
		
		$email_to = "applications@locumhealthuk.com";
$email_from = 'noreply@locumhealthuk.com'; //website email address
$webiste_name = 'Locumhealthuk';
$subject =  "New Job Application submitted";
$message = '
<center>
<h1 >Hello Admin! Job Application submitted please check admin panel for details <br> thanks </h1>
</center>
 ';
		
	
		 return $this->email($input->redirect_url,$email_to, $webiste_name, $email_from, $subject, $message);
	
    }


	public function upload_cv(Request $input)
    { 
	    $sufll =   substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,8);
        $recd  =  new cvs;
	    $input->session()->flash('success_message', 'CV Uploaded successfully. Please wait our team will contact you');
		
		$recd->name  =  $input->name ;
		$recd->email  =  $input->email ;
		$recd->phone  =  $input->phone ;
		$recd->message  =  $input->message ;
	    if($input->hasfile('cv_file')){
            $selected_pic = $input->file('cv_file');
            $extension = $selected_pic->getClientOriginalExtension();
            $doc_01 =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $recd->cv_file =  $doc_01 ;
            $selected_pic->move('upload/',$doc_01);
           }   
		$recd->save();
		
		$email_to = "applications@locumhealthuk.com";
$email_from = 'noreply@locumhealthuk.com'; //website email address
$webiste_name = 'Locumhealthuk';
$subject =  "New CV Uploaded";
$message = '
<center>
<h1 >Hello Admin! New CV Uploaded please check admin panel for details <br> thanks </h1>
</center>
 ';
		
	
		 return $this->email($input->redirect_url,$email_to, $webiste_name, $email_from, $subject, $message);
	
    }  
    
    
    	public function submit_Vacancy(Request $input)
    { 
	   
        $recd  =  new submited_Vacancy;
	    $input->session()->flash('success_message', 'Your details received. Please wait our team will contact you');
		
		$recd->name  =  $input->name ;
		$recd->email  =  $input->email ;
		$recd->phone_no  =  $input->phone_no ;
		$recd->description  =  $input->description ;
		$recd->location  =  $input->location ;
		$recd->date  =  date('Y-m-d') ;
	  
	    
		$recd->save();
		
		$email_to = "applications@locumhealthuk.com";
$email_from = 'noreply@locumhealthuk.com'; //website email address
$webiste_name = 'Locumhealthuk';
$subject =  "New Vacancy Uploaded";
$message = '
<center>
<h1 >Hello Admin! New Vacancy Uploaded please check admin panel for details <br> thanks </h1>
</center>
 ';
		
	
		 return $this->email($input->redirect_url,$email_to, $webiste_name, $email_from, $subject, $message);
	
    }
    
    
	
   
    //    public function item_details(Request $input)
    // { 
	
	//    $values  =  array();
	   
	
	//    $values['job_info'] = jobs_list::where('title','=',$input->title)->first();
	
	
    //     return view('users.post_details',['values'=>$values]);
	
	
      
    // }

	public function item_details(Request $input)
{ 
    $values = [];

    $job_info = jobs_list::where('id', $input->id)->first();

    $values['job_info'] = $job_info;

    return view('users.post_details', ['values' => $values]);
}
	
	 public function clients(Request $input)
    { 
	
	   $values  =  array();		
	   $values['jobs_lst'] = jobs_list::get();
	   $values['miscellaneous'] = miscellaneous::get();
	   return view('users.clients',['values'=>$values]);
      
    }
	
	 public function candidates(Request $input)
    { 
	
	   $values  =  array();		
	   $values['jobs_lst'] = jobs_list::get();
	   $values['miscellaneous'] = miscellaneous::get();
	   return view('users.candidates',['values'=>$values]);
      
    }
	
	
	 public function jobs(Request $input)
    { 
	   
	   $values  =  array();
       
       if(isset($input->q))
	   {
		$values['jobs_lst'] = jobs_list::where('title','LIKE','%'.$input->q.'%')->get();   
	   }else{ 
	   $values['jobs_lst'] = jobs_list::orderBy('date', 'desc')->get();
	   }
	   $values['miscellaneous'] = miscellaneous::get();
	   return view('users.jobs',['values'=>$values]);
      
    }
	
	
	   public function contact()
    { 
        return view('users.contact');
    }
	
	 public function send_mail(Request $input)
    { 
$email_to = "applications@locumhealthuk.com"; 
$email_from = 'noreply@locumhealth.co.uk'; //website email address
$webiste_name = 'locumhealth.co.uk';
$subject =  $input->subject;
$message = ' <html>
<head>
</head>
<body>
<table style="width:100%;">
<tr>
<td style="background:#3a3a3b;">
<center>


<h1 style="color:white;;font-family:Century Schoolbook;">Student Message </h1>
 <p style="color:white;">
      Name: '.$input->name.' <br><br>
               Email: '.$input->email_to.' <br><br>
         Phone: '.$input->Phone_number.' <br><br>
      message: '. $input->message .' <br><br>
      
      </p>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br>
</td>    
</tr>
</table>
</body>
</html> ';
   return $this->email("contact",$email_to, $webiste_name, $email_from, $subject, $message);
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
        //  session()->flash('success_message','Thanks! Message Received.');
          return redirect($redirect);
        
      }else{
     //  session()->flash('Error_message','Some thing wrong.please try again');
          return redirect($redirect);
    }
}

     public function userhome(Request $input)
    { 
	   $values  =  array();
	   $values['jobs_lst'] = jobs_list::orderBy('date', 'desc')->take(6)->get();
       $values['miscellaneous'] = miscellaneous::get();
		 return view('users.home',['values'=>$values]);
    }
	
	 public function about(Request $input)
    { 
	   $values  =  array();
	   $values['jobs_lst'] = jobs_list::get();
       $values['miscellaneous'] = miscellaneous::get();
		 return view('users.about',['values'=>$values]);
    }
	

	
	 public function programs(Request $input)
    {   $values  =  array();
	     if(isset($input->university))
		 {
			 
			 
			
	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['records_lst'] = programs::where('University',$input->university)->get();
	  
		
        
		 }else if(isset($input->speciality))
		 {
			  $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['records_lst'] = programs::where('Speciality',$input->speciality)->get();
		 }else if(isset($input->Intake))
		 {
			  $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['records_lst'] = programs::where('Intake',$input->Intake)->get();
		 }else if(isset($input->types))
		 {
			  $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['records_lst'] = programs::where('Category',$input->types)->get();
		 }else
		 {
			   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	   $values['records_lst'] = programs::get();
		 }
	      
	return view('users.programs_list',['values'=>$values]);

    }
	
	
	
}
