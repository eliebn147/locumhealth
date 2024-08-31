<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Models\miscellaneous;
use App\Models\cvs;
use App\Models\jobs_list;
use App\Models\tb_posts;
use App\Models\submited_Vacancy;
use App\Models\dynamicpages;


class miscellaneousController extends Controller
{
     public function post(Request $input)
    { 
	
	      if($input->dell)
		{
			$dell_rec = tb_posts::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			
			}
		}
	
	    $values['rec_edit'] = tb_posts::find($input->id);
		$values['records'] = tb_posts::where('type','=',$input->type)->get();
        return view('admin.posts',['values'=>$values]);

    }

	public function get_pages(Request $input)
	{
		// Get all dynamic pages
		$values = array();
		$values['records'] = dynamicpages::all();
	
		// Return the dynamic pages to the view
		return view('admin.posts', ['values' => $values]);
	}

	public function save_page(Request $input)
	{
		// Validate the input data
		$validatedData = $input->validate([
			'url' => 'required|string|max:255|unique:dynamic_pages,url',
			'header_content' => 'required|string',
			'body_content' => 'required|string',
			'head_tags' => 'required|string',
		]);
	
		// Create a new DynamicPage instance and assign the validated data
		$dynamicPage = new dynamicpages();
		$dynamicPage->url = $validatedData['url'];
		$dynamicPage->header_content = $validatedData['header_content'];
		$dynamicPage->body_content = $validatedData['body_content'];
		$dynamicPage->head_tags = $validatedData['head_tags'];
	
		// Save the dynamic page to the database
		$dynamicPage->save();
	
		// Redirect back with a success message
		return redirect()->back()->with('success', 'Page saved successfully.');
	}
	public function delete_page(Request $input)
	{
		// Validate the input ID
		$validatedData = $input->validate([
			'id' => 'required|integer|exists:dynamic_pages,id',
		]);
	
		// Find the page by ID and delete it
		$dynamicPage = dynamicpages::find($validatedData['id']);
	
		if ($dynamicPage) {
			$dynamicPage->delete();
			return redirect()->back()->with('success', 'Page deleted successfully.');
		} else {
			return redirect()->back()->with('error', 'Page not found.');
		}
	}
	
	  public function save_post(Request $input)
    { 
	
          if(isset($input->rec_id))
		{
			$rec_item  = tb_posts::find($input->rec_id);
			$input->session()->flash('success_message', 'Record  updated  successfully!');
		}else{
		$rec_item  =  new tb_posts;
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		}	
	
	    $rec_item->title  =  $input->title ;
		$rec_item->date  =  $input->date ;
		$rec_item->type  =  $input->type ;
		$rec_item->desciption  =  $input->desciption ;
		$rec_item->posted_by  =  session()->get('username_admin') ;
		
		if($input->hasfile('pic')){
            $selected_pic = $input->file('pic');
            
            $extension = $selected_pic->getClientOriginalExtension();
            $filename =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $rec_item->pic =  $filename ;
            $selected_pic->move('upload/',$filename);
           
           }
		
		
		$rec_item->save();
	
         return redirect('post?type='.$input->type);
    }  
	
	
	
	
	
	
	
	
	 public function miscellaneous(Request $input)
    { 
	
	      if($input->dell)
		{
			$dell_rec = miscellaneous::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			
			}
		}
	
	$values['miscellaneous_edit'] = miscellaneous::find($input->id);
		$values['miscellaneous'] = miscellaneous::where('type','=',$input->type)->get();
        return view('admin.miscellaneous',['values'=>$values]);

    }
	
	
	
	  public function save_miscellaneous(Request $input)
    { 
	
          if(isset($input->rec_id))
		{
			$rec_item  = miscellaneous::find($input->rec_id);
			$input->session()->flash('success_message', 'Record  updated  successfully!');
		}else{
		$rec_item  =  new miscellaneous;
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		}	
	
	    $rec_item->title  =  $input->title ;
		$rec_item->type  =  $input->type ;
		$rec_item->save();
	
         return redirect('miscellaneous?type='.$input->type);
    }  
	
	
	
	
	 public function pages_content()
    { 
        return view('admin.pages_content');
    }
	
	
	
	 public function cvs_list(Request $input)
    { 
	
	         if($input->dell)
		{
			$dell_rec = cvs::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			
			}
		}
	
	
	$values['rec_edit'] = cvs::find($input->id);
		$values['records_lst'] = cvs::get();
        return view('admin.cvs_list',['values'=>$values]);
       
    }
    
    
     public function vacancies_list(Request $input)
    { 
	
	         if($input->dell)
		{
			$dell_rec = submited_Vacancy::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			
			}
		}
	
	
	$values['rec_edit'] = submited_Vacancy::find($input->id);
		$values['records_lst'] = submited_Vacancy::get();
        return view('admin.vacancies_list',['values'=>$values]);
       
    }
    
    
    
    
    
	
	 public function add_university(Request $input)
    { 
	
	   $values['rec_edit'] = universities::find($input->id);
        return view('admin.add_university',['values'=>$values]);

    }
	
	
	  public function save_university(Request $input)
    { 
	
          if(isset($input->rec_id))
		{
			$rec_item  = universities::find($input->rec_id);
			$input->session()->flash('success_message', 'Record  updated  successfully!');
		}else{
		$rec_item  =  new universities;
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		}	
	
		      if($input->hasfile('Logo')){
            $selected_pic = $input->file('Logo');
            
            $extension = $selected_pic->getClientOriginalExtension();
            $filename =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $rec_item->Logo =  $filename ;
            $selected_pic->move('upload/',$filename);
           
           }


             if($input->hasfile('cover_img')){
            $selected_pic = $input->file('cover_img');
            
            $extension = $selected_pic->getClientOriginalExtension();
            $filename2 =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $rec_item->cover_img =  $filename2 ;
            $selected_pic->move('upload/',$filename2);
           
           }
		   
		   

	
	    $rec_item->name  =  $input->name ;
		$rec_item->Address  =  $input->Address ;
		 $rec_item->State  =  $input->State ;
		$rec_item->Country  =  $input->Country ;
		 $rec_item->Status  =  $input->Status ;
		$rec_item->Website  =  $input->Website ;
		 $rec_item->Map_Link  =  $input->Map_Link ;
		$rec_item->Video  =  $input->Video ;
		 $rec_item->uniq_shfl  =  str_shuffle($input->name."qwertyuioplkjhgfdsazxc1234567890vbnm");
		$rec_item->Address  =  $input->Address ;
		$rec_item->save();
	
         return redirect('add-university');
    }  
	
	
	 public function jobs_list(Request $input)
    { 
	        if($input->dell)
		{
			$dell_rec = jobs_list::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			}
		}
	
	$values  =  array();
	
	    $values['rec_edit'] = jobs_list::find($input->id);
		$values['records_lst'] = jobs_list::get();
        return view('admin.jobs_list',['values'=>$values]);
	
    }
	
	 public function add_jobs(Request $input)
    {   $values  =  array();
	   $values['miscellaneous'] = miscellaneous::get();
	   $values['universities'] = jobs_list::get();
	 $values['rec_edit'] = jobs_list::find($input->id);
        return view('admin.add_jobs',['values'=>$values]);
      
    }
	
		  public function save_programs(Request $input)
    { 
          if(isset($input->rec_id))
		{
			$rec_item  = jobs_list::find($input->rec_id);
			$input->session()->flash('success_message', 'Record  updated  successfully!');
		}else{
		$rec_item  =  new jobs_list;
		 $rec_item->shufl_id  =  str_shuffle($input->name."qwertyuioplkjhgfdsazxc1234567890vbnm");
	      $input->session()->flash('success_message', 'New Record  created  successfully!');
		}	
		$rec_item->title  =  $input->title ;
		$rec_item->date   =  $input->date ;
		$rec_item->Location  =  $input->Location ;
		$rec_item->Salary  =  $input->Salary ;
		$rec_item->category  =  $input->category ;
		$rec_item->job_details  =  $input->job_details ;
		$rec_item->save();

         return redirect('add-jobs');
    }  
	
	
	
}
