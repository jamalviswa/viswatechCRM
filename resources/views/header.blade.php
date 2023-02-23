 <!-- ========== Header Start ========== -->
 <header id="page-topbar">
     <div class="navbar-header">
         <div class="d-flex">

             <!-- LOGO Start-->
             <div class="navbar-brand-box text-center">
                 <a href="{{route('dashboard.index')}}" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="{{URL::to('images/logo.png')}}" alt="logo-sm-light" height="50">
                     </span>
                     <span class="logo-lg">
                         <img src="{{URL::to('images/logo.png')}}" alt="logo-light" height="50">
                     </span>
                 </a>
             </div>
             <!-- LOGO End-->

             <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                 <i class="ri-menu-2-line align-middle"></i>
             </button>
         </div>

         <!-- Profile Grid Start -->
         <div class="d-flex">
             <div class="dropdown d-inline-block user-dropdown">
                 <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="rounded-circle header-profile-user" src="{{URL::to('images/avatar.jpg')}}" alt="Header Avatar">
                     <span class="d-none d-xl-inline-block ms-1">Viswa</span>
                     <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                     <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item text-danger" href="#">
                         <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                     </a>
                 </div>
             </div>
         </div>
         <!-- Profile Grid End -->

     </div>
 </header>
 <!-- ========== Header End ========== -->