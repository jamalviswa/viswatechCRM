  <!-- ========== Navigation Menu Start ========== -->
  <div class="topnav">
      <div class="container-fluid">
          <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
              <div class="collapse navbar-collapse" id="topnav-menu-content">
                  <ul class="navbar-nav">
                  <li class="nav-item">
                          <a class="nav-link" href="#">
                          <i class="mdi mdi-view-dashboard me-2"></i>Dashboard
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('staffs.staff_index')}}">
                              <i class="mdi mdi-account-multiple me-2"></i> Staff Mgnt
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <i class="mdi mdi-account-group me-2"></i> Client Mgnt
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                <a href="" class="dropdown-item">Client List</a>
                                <a href="" class="dropdown-item">Leads Management</a>
                                <a href="{{route('clients.meeting_index')}}" class="dropdown-item">Client Meeting Schedule Management</a>
                            </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <i class="mdi mdi-cash me-2"></i> Salary Mgnt
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                <a href="{{route('salary.salary_info_index')}}" class="dropdown-item">Salary Info</a>
                                <a href="" class="dropdown-item">Salary Increment</a>
                            </div>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </div>
  <!-- ========== Navigation Menu End ========== -->