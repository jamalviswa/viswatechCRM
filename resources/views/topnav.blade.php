  <!-- ========== Navigation Menu Start ========== -->
  <div class="topnav">
      <div class="container-fluid">
          <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
              <div class="collapse navbar-collapse" id="topnav-menu-content">
                  <ul class="navbar-nav">
                    
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <i class="mdi mdi-home-variant-outline me-2"></i> Dashboard
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{route('staffs.index')}}">
                              <i class="mdi mdi-account me-2"></i> Staff Mgnt
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{route('clients.admin_index')}}">
                              <i class="mdi mdi-account-box-multiple me-2"></i> Client Mgnt
                          </a>
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                              <i class="mdi mdi-cube me-2"></i>Project Mgnt<div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-apps">
                              <a href="{{route('projectestimations.admin_index')}}" class="dropdown-item">Project Estimation List</a>
                          </div>
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                              <i class="mdi mdi-cash me-2"></i>Salary Mgnt<div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-apps">
                              <a href="" class="dropdown-item">Staff Salary Info</a>
                              <a href="" class="dropdown-item">Increment Info</a>
                          </div>
                         
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                              <i class="mdi mdi-history me-2"></i>Reports <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-apps">
                              <a href="{{route('salaryinfos.index')}}" class="dropdown-item">Staff Salary Info</a>
                          </div>
                      </li>

                  </ul>
              </div>
          </nav>
      </div>
  </div>
  <!-- ========== Navigation Menu End ========== -->