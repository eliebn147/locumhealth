<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\admin;
use App\Models\agents;
use App\Models\miscellaneous;
use App\Models\universities;
use App\Models\programs;
use App\Models\tb_posts;
use App\Models\applications;
use App\Models\application_education;
use App\Models\application_documents;
use App\Models\cvs;


class applicationsController extends Controller
{
	
	
	 public function application_review(Request $input)
    { 
	       $values  =  array();
		   	   $values['miscellaneous'] = miscellaneous::get();
			   $values['aplic'] = applications::find($input->id);
	    $values['universities'] = universities::get();
	    $values['program_info']   =  programs::find($values['aplic']->program);
	    $values['eq_document'] = miscellaneous::whereIn('id',explode(",",$values['program_info']->req_documents))->get();
      	$values['application_documents'] = application_documents::where('application_id',$input->id)->get();
        $values['application_education'] = application_education::where('appoinment_id',$input->id)->get();
	  
        return view('admin.review_application',['values'=>$values]);
    }
	
   
   public function apply(Request $input)
    { 
	     if(isset($_GET['dell_doc']))
		 {
	      $dell_rec = application_documents::find($input->dell_doc);
          if($dell_rec !="")
		  {
			  $dell_rec->delete();
		  }
		 }
		 
		  if(isset($_GET['dell_edu']))
		 {
	      $dell_rec = application_education::find($input->dell_edu);
          if($dell_rec !="")
		  {
			  $dell_rec->delete();
		  }
		 }
	
	
	   
	
	
	      $values  =  array();
		   	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	    $values['p_i']   =  programs::where('uniq_shufl',$input->item)->first();
	
	    $values['eq_document'] = miscellaneous::whereIn('id',explode(",",$values['p_i']->req_documents))->get();
      	$values['application_documents'] = application_documents::where('application_id',$input->doc)->get();
		 $values['application_education'] = application_education::where('appoinment_id',$input->edu)->get();
		
		$values['Category'] = "";
		$values['University'] = "";
		$values['Title'] = "";
		
		if($values['p_i'] !="")
		{
		 $values['Category'] = miscellaneous::find($values['p_i']->Category)->title ?? '';
		$values['University'] = universities::find($values['p_i']->University)->name ?? '';
		$values['Title'] =   miscellaneous::find($values['p_i']->Title)->title ?? '';
		}
	
	
        return view('users.apply',['values'=>$values]);
    }
   
   
   
    public function agent_profile(Request $input)
    { 
	       if(isset($input->status))
		   {
			  $edit_rec =  admin::find($input->agent);
			  if($edit_rec !="")
			  {
				  
				 $New_pass    =$edit_rec->usr_id; 
				  
				 $edit_rec->status =$input->status; 
				 $edit_rec->password =$New_pass;
				 $edit_rec->save();
				 
				 
				 	$email_to = $edit_rec->email; 
$email_from = 'noreply@studynortherncyprus.com'; //website email address
$webiste_name = 'Studynortherncyprus';
$subject =  "Welcome to Studynortherncyprus";
$message = '
<center>


 <h1 >Welcome to Studynortherncyprus  </h1>
 <p >Hi! '.$edit_rec->first_name.' Your account has been verified please use bellow login details to start working <br><br>
               UserName: '.$edit_rec->email.' <br><br>
			   Password: '.$edit_rec->usr_id.' <br><br>
			   Login Link: https://studynortherncyprus.com/account <br><br>
         </p>
</center>
 ';
   return $this->email("agent-profile?agent=".$input->agent,$email_to, $webiste_name, $email_from, $subject, $message);
				 
				 
			  }
		   }
		   $values  =  array();
		   $values['admin'] = admin::find($input->agent);
	       $values['agents'] = agents::where('rec_id',$values['admin']->id)->first();
        return view('admin.agent_review',['values'=>$values]);
    }
	
	

	
	
	 public function agent_review(Request $input)
    { 
	       $values  =  array();
		   	   $values['miscellaneous'] = miscellaneous::get();
			   $values['aplic'] = applications::find($input->id);
	    $values['universities'] = universities::get();
	    $values['program_info']   =  programs::find($values['aplic']->program);
	    $values['eq_document'] = miscellaneous::whereIn('id',explode(",",$values['program_info']->req_documents))->get();
      	$values['application_documents'] = application_documents::where('application_id',$input->id)->get();
        $values['application_education'] = application_education::where('appoinment_id',$input->id)->get();
	  
        return view('admin.review_application',['values'=>$values]);
    }
	
	
	 public function apply_now(Request $input)
    { 
	       $values  =  array();
		   	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	    $values['program_info']   =  programs::where('uniq_shufl',$input->item)->first();
	
        return view('users.apply_now',['values'=>$values]);
    }
  
   
    public function applicants(Request $input)
    { 
	
	$values['cpi_edit'] = candidate_persnal_info::find($input->id);
		$values['cpi'] = candidate_persnal_info::get();
        return view('admin.applicants',['values'=>$values]);
     
    }
	
	 public function other_info(Request $input)
    { 
	
	    if(isset($input->dell_id))
		{
			$dell_rec = application_documents::find($input->dell_id);
			if($dell_rec !="")
			{
				$dell_rec->delete();
			}
		}
		
		 if(isset($input->dell_edu))
		{
			$dell_rec = application_education::find($input->dell_edu);
			if($dell_rec !="")
			{
				$dell_rec->delete();
			}
		}
		
		
		
	
	           $values  =  array();
		   	   $values['miscellaneous'] = miscellaneous::get();
			   $values['applications'] = applications::find($input->id);
	    $values['universities'] = universities::get();
	    $values['program_info']   =  programs::find($values['applications']->program);
	    $values['eq_document'] = miscellaneous::whereIn('id',explode(",",$values['program_info']->req_documents))->get();
      	$values['application_documents'] = application_documents::where('application_id',$input->id)->get();
        $values['application_education'] = application_education::where('appoinment_id',$input->id)->get();
             

	  return view('admin.application_information',['values'=>$values]);
    }
	
	
	
	 public function Upload_Document(Request $input)
    { 
      
		$rec_item  =  new application_documents;
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		

		     
	    $rec_item->title  =  $input->title ;
		$rec_item->application_id  =  $input->application_id ;
		 if($input->hasfile('file_doc')){
            $selected_pic = $input->file('file_doc');
            
            $extension = $selected_pic->getClientOriginalExtension();
            $filename =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $rec_item->file_doc =  $filename ;
            $selected_pic->move('upload/',$filename);
           
           }
	
		$rec_item->save();
	
	    if($input->user_type=="0")
		 {
		 return redirect('apply?item='.$input->item."&doc=".$rec_item->application_id);	 
		 }else{
         return redirect('other-info?id='. $rec_item->application_id);
		 }  
	
	
         
    } 


     public function application_education(Request $input)
    { 
      
		$rec_item  =  new application_education;
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		

		     
	    $rec_item->institute  =  $input->institute ;
		$rec_item->Country  =  $input->Country ;
		$rec_item->start_year  =  $input->start_year ;
		$rec_item->end_year  =  $input->end_year ;
		$rec_item->Qualification  =  $input->Qualification ;
		$rec_item->Main_Subject  =  $input->Main_Subject ;
		$rec_item->Result  =  $input->Result ;
		$rec_item->appoinment_id  =  $input->appoinment_id ;
	
		$rec_item->save();
	
	       if($input->user_type=="0")
		 {
		 return redirect('apply?item='.$input->item."&edu=".$input->appoinment_id);	 
		 }else{
         return redirect('other-info?id='. $rec_item->application_id);
		 } 
	
	
  
    } 
	
	
	
	
	
	
	public function enrol_student(Request $input)
    { 
	      $values  =  array();
		   	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = universities::get();
	    $values['program_info']   =  programs::where('uniq_shufl',$input->item)->first();
	
	
	
        return view('admin.enrol_student',['values'=>$values]);
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
	
		      if($input->hasfile('profile_pic')){
            $selected_pic = $input->file('profile_pic');
            
            $extension = $selected_pic->getClientOriginalExtension();
            $filename =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $rec_item->profile_pic =  $filename ;
            $selected_pic->move('upload/',$filename);
           
           }
	
	    $rec_item->applicant  =  $input->applicant ;
		$rec_item->program  =  $input->program ;
		 $rec_item->university  =  $input->university ;
		$rec_item->date  =  date('Y-m-d') ;
		 $rec_item->status  =  "Submitted";
		$rec_item->name  =  $input->name ;
		 $rec_item->email  =  $input->email ;
		 $rec_item->phone  =  $input->phone ;
		 $rec_item->whatsapp  =  $input->whatsapp ;
		 $rec_item->Passport  =  $input->Passport ;
		 $rec_item->country  =  $input->country ;
		  $rec_item->type  =  $input->type ;
		 $rec_item->intake  =  $input->intake ;
		 $rec_item->applying_as  =  $input->applying_as ;
		 $rec_item->Gender  =  $input->Gender ;
		 $rec_item->Date_of_Birth  =  $input->Date_of_Birth ;
		 $rec_item->Place_of_birth  =  $input->Place_of_birth ;
		 $rec_item->Affidavits  =  $input->Affidavits ;
		 $rec_item->country_residence  =  $input->country_residence ;
		  $rec_item->Mother  =  $input->Mother ;
		 $rec_item->cnic  =  $input->cnic ;
		 $rec_item->Address  =  $input->Address ;
		 $rec_item->Source_funds  =  $input->Source_funds ;
		 $rec_item->sponsor_name  =  $input->sponsor_name ;
		 $rec_item->representative  =  $input->representative ;
		 $rec_item->doi  =  $input->doi ;
		 $rec_item->coi  =  $input->coi ;
		 $rec_item->doe  =  $input->doe ;
		 $rec_item->Father  =  $input->Father ;
		 $rec_item->English_language  =  $input->English_language ;
		 $rec_item->Sponsor_Relationship  =  $input->Sponsor_Relationship ;
		
		 $rec_item->uniq_shufl  =  str_shuffle($input->name."qwertyuioplkjhgfdsazxc1234567890vbnm");
		$rec_item->save();
	     if($input->user_type=="0")
		 {
		 return redirect('apply?item='.$input->item."&doc=".$rec_item->id);	 
		 }else{
         return redirect('other-info?id='. $rec_item->id);
		 }  
	}  	
	
	
	
	
    public function applications(Request $input)
    { 
	  if($input->dell)
		{    
			$dell_rec = cvs::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			}
		}
	    $values  =  array();
	    $values['records_lst'] = cvs::where('vacancies_type','!=','')->get();
        return view('admin.applications',['values'=>$values]);
	
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
         // session()->flash('success_message','Thanks! Message Received.');
          return redirect($redirect);
        
      }else{
      // session()->flash('Error_message','Some thing wrong.please try again');
          return redirect($redirect);
    }
}
	
   
}
