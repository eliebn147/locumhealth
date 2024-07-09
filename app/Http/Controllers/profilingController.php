<?php
namespace App\Http\Controllers\admin;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\admin;
class profilingController extends Controller
{
     public function adminLogin()
    { 
        return view('admin.login');
    }
	
	 public function do_login(Request $input)
    {
		
		 
		
		  $username  = $input->username;  
          $password  = $input->password;
          $usercheck =  admin::where('username',$username)->where('password',$password)->where('status','Active')->first(); 

	
		
        if($usercheck !="")
         {
      
          
           $input->session()->put('id_admin',$usercheck->id);
           $input->session()->put('img_admin',$usercheck->img);
           $input->session()->put('first_name_admin',$usercheck->first_name);
           $input->session()->put('last_name_admin',$usercheck->last_name);
           $input->session()->put('phone_admin',$usercheck->phone);
		   $input->session()->put('username_admin',$usercheck->username);
           $input->session()->put('email_admin',$usercheck->email);
		   $input->session()->put('role_admin',$usercheck->role);
           $input->session()->put('img_admin',$usercheck->img);
      


          $input->session()->flash('success_message', 'Welcome back Dear '.$usercheck->first_name.' '.$usercheck->last_name.' have a nice day!');
              
			if($usercheck->role=="E-Medical"){  
			  
			  return redirect('medical-list');
			}else{  
            return redirect('applications');
            }  
 
         }else
         {
          $input->session()->flash('Error_message', 'Invalid Login Credentials');
              
            return redirect('admin');	
         }
		 
    }
	
		 public function forgot_password()
    {
         return view('admin.forgot_password');
    }
	
		 public function change_password()
    {
		 $date = date('Y-m-d');
        $values =  array();
		
		$values['admin_edit'] = admin::find(session()->get('id_admin'));
		
        return view('admin.change_password',['values'=>$values]);
		
      
    }
	
	 public function save_password(Request $input)
    {
		    $Old_pass    = $input->Old_pass; 
			$New_pass    = $input->New_pass; 
			$Confirm     = $input->Confirm; 
			
			if($New_pass != $Confirm)
			{
			$input->session()->flash('Error_message', 'New password and confirm password must be same');
            return redirect('change-password');
			}
			
			
			$check_old  = admin::where('username',session()->get('username_admin'))->where('password',$Old_pass)->count();
		
		if($check_old>0)
		{
		$password_change	= admin::where('username',session()->get('username_admin'))->first();
		$password_change->password  = $New_pass;
		$password_change->save();
		$input->session()->flash('success_message', 'Account password has been changed successfully!');
		}else
		{
			      $input->session()->flash('Error_message', 'Old password is not valid');
                
		}
		
		
		
		
        return redirect('change-password');
		
     
    }
	
	
	
		 public function profile()
    {
		
		$date = date('Y-m-d');
        $values =  array();
		
		$values['admin_edit'] = admin::find(session()->get('id_admin'));
		
        return view('admin.profile',['values'=>$values]);
		
		
    }
	
	 public function update_profile(Request $input)
    {
		
			$admin  = admin::find(session()->get('id_admin'));
		
		$admin->first_name  =  $input->first_name ;
		$admin->last_name  =  $input->last_name ;
		$admin->phone  =  $input->phone ;
		$admin->email  =  $input->email ;
	
	      if($input->hasfile('img')){
            $selected_pic = $input->file('img');
            
            $extension = $selected_pic->getClientOriginalExtension();
            $filename =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),0,12).time().'.'.$extension;
            $admin->img =  $filename ;
            $selected_pic->move('upload/',$filename);
             $input->session()->put('img_admin',$filename);
           } 
	
	
		$admin->save();
			$input->session()->flash('success_message', 'User  updated  successfully!');
        return redirect('profile');
		
     
    }
	
	
	
		 public function users_list(Request $input)
    {
		if($input->dell)
		{
			$dell_rec = admin::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			return redirect('users-list');
			}
		}
		
		if(isset($input->login) && session()->get('role_admin') =="Superadmin")
		{
			 $username  = $input->login;  
         
          $usercheck =  admin::where('username',$username)->first(); 

	
		
        if($usercheck !="")
         {
      
          $input->session()->put('direct_login',session()->get('username_admin'));
           $input->session()->put('id_admin',$usercheck->id);
           $input->session()->put('img_admin',$usercheck->img);
           $input->session()->put('first_name_admin',$usercheck->first_name);
           $input->session()->put('last_name_admin',$usercheck->last_name);
           $input->session()->put('phone_admin',$usercheck->phone);
		   $input->session()->put('username_admin',$usercheck->username);
           $input->session()->put('email_admin',$usercheck->email);
		   $input->session()->put('role_admin',$usercheck->role);
           $input->session()->put('img_admin',$usercheck->img);
      


          $input->session()->flash('success_message', 'Welcome back Dear '.$usercheck->first_name.' '.$usercheck->last_name.' have a nice day!');
              
			if($usercheck->role=="E-Medical"){  
			  
			  return redirect('medical-list');
			}else{  
            return redirect('home');
            }  
 
         }else
         {
          $input->session()->flash('Error_message', 'Invalid Login Credentials');
              
            return redirect('admin');	
         }
		}
		
		
		 $date = date('Y-m-d');
        $values =  array();
		
		$values['admin_edit'] = admin::find($input->id);
		$values['admins'] = admin::where('role','!=','Superadmin')->get();
        return view('admin.users_list',['values'=>$values]);
		
		
       
    }
	
	
	
	
		 public function add_user(Request $input)
    {
		
		if($input->dell)
		{
			$dell_rec = admin::find($input->dell);
			if($dell_rec !=""){
			$dell_rec->delete();
			return redirect('add-passport');
			}
		}
		
		if(isset($input->login) && session()->get('role_admin') =="Superadmin")
		{
			 $username  = $input->login;  
         
          $usercheck =  admin::where('username',$username)->first(); 

	
		
        if($usercheck !="")
         {
      
          $input->session()->put('direct_login',session()->get('username_admin'));
           $input->session()->put('id_admin',$usercheck->id);
           $input->session()->put('img_admin',$usercheck->img);
           $input->session()->put('first_name_admin',$usercheck->first_name);
           $input->session()->put('last_name_admin',$usercheck->last_name);
           $input->session()->put('phone_admin',$usercheck->phone);
		   $input->session()->put('username_admin',$usercheck->username);
           $input->session()->put('email_admin',$usercheck->email);
		   $input->session()->put('role_admin',$usercheck->role);
           $input->session()->put('img_admin',$usercheck->img);
      


          $input->session()->flash('success_message', 'Welcome back Dear '.$usercheck->first_name.' '.$usercheck->last_name.' have a nice day!');
              
			if($usercheck->role=="E-Medical"){  
			  
			  return redirect('medical-list');
			}else{  
            return redirect('dashboard');
            }  
 
         }else
         {
          $input->session()->flash('Error_message', 'Invalid Login Credentials');
              
            return redirect('Admin');	
         }
		}
		
		
		 $date = date('Y-m-d');
        $values =  array();
		
		$values['admin_edit'] = admin::find($input->id);
		$values['admins'] = admin::where('role','!=','Superadmin')->where('role','!=','E-Medical')->get();
        return view('admin.add_user',['values'=>$values]);
		
     
    }
	
	 public function save_user(Request $input)
    {
		if(isset($input->rec_id))
		{
			$admin  = admin::find($input->rec_id);
			$input->session()->flash('success_message', 'User  updated  successfully!');
		}else{
			
			$check_admin  = admin::where('username',$input->username)->orwhere('email',$input->email)->orwhere('phone',$input->phone)->first();
			if($check_admin !="")
			{$input->session()->flash('Error_message', 'this user already exists.');
				return redirect('add-user');
			}
			
		$admin  =  new admin;
		$admin->password  =  $input->password ;
	$input->session()->flash('success_message', 'New user  created  successfully!');
		}
		$admin->first_name  =  $input->first_name ;
		$admin->last_name  =  $input->last_name ;
		$admin->phone  =  $input->phone ;
		$admin->username  =  $input->username ;
		$admin->email  =  $input->email ;
		$admin->password  = $input->password;  
		$admin->role  =  $input->role ;
		$admin->status  =  "Active";
		$admin->img  =  "dummy.png";
		$admin->save();
        return redirect('add-user');
		
     
    }
	
	
	
	
	
	 public function logout(Request $input)
    {
        	if(session()->get('direct_login') !=""){
		 
		 
		 $username  = session()->get('direct_login');  
         
          $usercheck =  admin::where('username',$username)->where('status','Active')->first(); 

	
		
        if($usercheck !="")
         {
      
           $input->session()->put('id_admin',$usercheck->id);
           $input->session()->put('img_admin',$usercheck->img);
           $input->session()->put('first_name_admin',$usercheck->first_name);
           $input->session()->put('last_name_admin',$usercheck->last_name);
           $input->session()->put('phone_admin',$usercheck->phone);
		   $input->session()->put('username_admin',$usercheck->username);
           $input->session()->put('email_admin',$usercheck->email);
		   $input->session()->put('role_admin',$usercheck->role);
           $input->session()->put('img_admin',$usercheck->img);
      


          $input->session()->flash('success_message', 'Welcome back Dear '.$usercheck->first_name.' '.$usercheck->last_name.' have a nice day!');
               $input->session()->forget('direct_login');
			if($usercheck->role=="E-Medical"){  
			  
			  return redirect('medical-list');
			}else{  
            return redirect('home');
            }  
 
         }else
         {
          $input->session()->flash('Error_message', 'Invalid Login Credentials');
              
            return redirect('admin');	
         }
		
		}else{
       $input->session()->flush();
	   return redirect('/');
        }
    }
	
	
	
	
}
