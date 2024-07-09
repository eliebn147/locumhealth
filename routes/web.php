<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilingController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\miscellaneousController;
use App\Http\Controllers\applicationsController;
use App\Http\Controllers\webPagesController;
use App\Http\Controllers\UserProfilingController;
use App\Http\Controllers\userApplicationProccesController;
use App\Http\Controllers\agentController;
use App\Http\Controllers\ajaxController;


// web routes 

Route::get('/', [webPagesController::class, 'userhome']);
Route::get('become-agent', [agentController::class, 'become_agent']);
Route::get('partner', [agentController::class, 'partner']);
Route::get('account', [UserProfilingController::class, 'account']);
Route::get('apply_now', [UserProfilingController::class, 'account']);
Route::get('sign-up', [UserProfilingController::class, 'signup']);
Route::POST('account_working', [UserProfilingController::class, 'account_working']);
Route::POST('save_agent', [agentController::class, 'save_agent']);


Route::get('user-profile', [UserProfilingController::class, 'user_profile']);
Route::get('user-password', [UserProfilingController::class, 'user_password']);
Route::get('my-applications', [userApplicationProccesController::class, 'my_applications']);
Route::get('about', [webPagesController::class, 'about']);
Route::get('jobs', [webPagesController::class, 'jobs']);
Route::get('candidates', [webPagesController::class, 'candidates']);
Route::get('employers', [webPagesController::class, 'clients']);
Route::POST('upload_cv', [webPagesController::class, 'upload_cv']);
Route::POST('apply_job', [webPagesController::class, 'apply_job']);
Route::POST('refer_friend', [webPagesController::class, 'refer_friend']);
Route::get('item', [webPagesController::class, 'item_details']);
Route::POST('submit_Vacancy', [webPagesController::class, 'submit_Vacancy']);




Route::get('apply-now', [applicationsController::class, 'apply_now']);
Route::get('apply', [applicationsController::class, 'apply']);
Route::get('application-review', [applicationsController::class, 'application_review']);



Route::get('events', [webPagesController::class, 'events']);
Route::get('contact', [webPagesController::class, 'contact']);
Route::POST('send_mail', [webPagesController::class, 'send_mail']);

Route::get('visa_requirments', [webPagesController::class, 'visa_requirments']);
Route::POST('save_application', [userApplicationProccesController::class, 'save_application']);

Route::POST('change_status', [userApplicationProccesController::class, 'change_status']);

// ajax routes 



Route::get('programs_list', [ajaxController::class, 'programs_list']);

// admin routes 

Route::get('admin', [profilingController::class, 'adminLogin']);
Route::POST('do_login', [profilingController::class, 'do_login']);
Route::get('forgot-password', [profilingController::class, 'forgot_password']);
Route::get('change-password', [profilingController::class, 'change_password']);
Route::POST('save_pass', [profilingController::class, 'save_password']);
Route::get('profile', [profilingController::class, 'profile']);
Route::POST('update_profile', [profilingController::class, 'update_profile']);
Route::get('users-list', [profilingController::class, 'users_list']);
Route::get('add-user', [profilingController::class, 'add_user']);
Route::POST('save_user', [profilingController::class, 'save_user']);
Route::get('logout', [profilingController::class, 'logout']);
Route::get('miscellaneous', [miscellaneousController::class, 'miscellaneous']);
Route::POST('save_miscellaneous', [miscellaneousController::class, 'save_miscellaneous']);
Route::get('program-types', [miscellaneousController::class, 'program_types']);
Route::get('programs-title', [miscellaneousController::class, 'programs_title']);
Route::get('pages-content', [miscellaneousController::class, 'pages_content']);
Route::get('cvs-list', [miscellaneousController::class, 'cvs_list']);
Route::get('vacancies-list', [miscellaneousController::class, 'vacancies_list']);
Route::get('add-university', [miscellaneousController::class, 'add_university']);
Route::POST('save_university', [miscellaneousController::class, 'save_university']);
Route::get('jobs-list', [miscellaneousController::class, 'jobs_list']);
Route::get('add-jobs', [miscellaneousController::class, 'add_jobs']);
Route::POST('save_programs', [miscellaneousController::class, 'save_programs']);
Route::get('agent-apply', [applicationsController::class, 'enrol_student']);
Route::get('other-info', [applicationsController::class, 'other_info']);
Route::POST('save_application', [applicationsController::class, 'save_application']);
Route::POST('Upload_Document', [applicationsController::class, 'Upload_Document']);
Route::POST('application_education', [applicationsController::class, 'application_education']);
Route::get('agent-review', [applicationsController::class, 'agent_review']);
Route::get('agent-profile', [applicationsController::class, 'agent_profile']);

Route::get('applicants', [applicationsController::class, 'applicants']);
Route::get('applications', [applicationsController::class, 'applications']);
Route::get('home', [dashboardController::class, 'adminhome']);
Route::get('post', [miscellaneousController::class, 'post']);
Route::POST('save_post', [miscellaneousController::class, 'save_post']);

