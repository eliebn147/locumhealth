 @if(session()->get('username_admin') ==null)

  @php
        header("Location: " . URL::to('/admin'), true, 302);
        exit();
    @endphp
  
  @endif


 <div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="home" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo.gif" alt="" height="52">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.gif" alt="" height="52">
            </span>
        </a>
        <a href="home" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo.gif" alt="" height="52">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.gif" alt="" height="52">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
				
			
				
				
				
				
				
				
                <li class="nav-item">
                    <a href="applications" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Applications List</span> </a>
                </li>

                

              

              

               

                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ph-folder-open"></i> <span data-key="t-ecommerce">Manage Jobs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="jobs-list" class="nav-link" data-key="t-products">Jobs List</a>
                            </li>
                            <li class="nav-item">
                                <a href="add-jobs" class="nav-link" data-key="t-products-grid">Add Job</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>



             

              

                <li class="nav-item">
                    <a href="cvs-list" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">CV List</span> </a>
                </li>

               <li class="nav-item">
                    <a href="vacancies-list" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Submitted vacancies</span> </a>
                </li>

            
  <li class="nav-item">
                    <a href="post?type=Pages" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Pages Content</span> </a>
                </li>
				
				 <li class="nav-item">
                    <a href="post?type=Testimonials" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Testimonials</span> </a>
                </li>

 <!--<li class="nav-item">-->
 <!--                   <a href="post?type=Posts" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Candidates Posts</span> </a>-->
 <!--               </li>-->
				
	<!--			<li class="nav-item">-->
 <!--                   <a href="post?type=clients" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Clients Posts</span> </a>-->
 <!--               </li>-->
 
            

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ph-address-book"></i> <span data-key="t-pages">User Profiling</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            
                           <li class="nav-item">
                                <a href="profile" class="nav-link" data-key="t-profile"> Profile </a>
                            </li>
							
                            <li class="nav-item">
                                <a href="change-password" class="nav-link" data-key="t-timeline">Change Password  </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout" class="nav-link" data-key="t-faqs"> Logout </a>
                            </li>
                           
                        </ul>
                    </div>
                </li>

               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
 <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="home" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo.gif" alt="" height="52">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo.gif" alt="" height="52">
                                    </span>
                                </a>

                                <a href="home" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo.gif" alt="" height="52">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo.gif" alt="" height="52">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <form class="app-search d-none d-md-inline-flex">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Application id..." autocomplete="off" id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                </div>
                              
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            

                          

                            

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                    <i class='bi bi-arrows-fullscreen fs-lg'></i>
                                </button>
                            </div>

                           


                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="upload/{{session()->get('img_admin')}}" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ session()->get('first_name_admin') }} {{session()->get('last_name_admin')}}</span>
                                            <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">{{session()->get('role_admin')}}</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item
                                    <h6 class="dropdown-header">Welcome Richard!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                    <a class="dropdown-item" href="apps-tickets-overview.html"><i class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="auth-lockscreen.html"><i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>