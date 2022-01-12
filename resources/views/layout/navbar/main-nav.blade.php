<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
     
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item nav-item d-none d-sm-inline-block">
            <a href="{{ url('') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>&nbsp;Dashboard
            </a>
           
        </li>


        <li class="nav-item nav-item d-none d-sm-inline-block">
            <a href="{{ route('createHome') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>&nbsp;Tambah Data
            </a>
           
        </li>
      
        @if (Auth::user()->level == 0)
        <li class="nav-item nav-item d-none d-sm-inline-block">
            <a href="{{ url('/users') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>&nbsp;Tambah Users
            </a>
           
        </li>
        @endif
     
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form> -->
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

     
        <!-- Messages Dropdown Menu -->
      
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown px-1">
       
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          @if (Auth::user()->image == NULL)
              {{ Auth::user()->name }}
          @else
            <img src="{{ asset('image/'. Auth::user()->image ) }}" width="40" height="40" class="rounded-circle border right-img">
          @endif
          
         
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          @if (Auth::user()->level == 0)
          <span class="dropdown-header">{{ Auth::user()->email }}&nbsp; |  &nbsp;Admin</span>
          @else
          <span class="dropdown-header">{{ Auth::user()->email }}&nbsp; |  &nbsp;User</span>
          @endif
            
        

          <div class="dropdown-divider"></div>
          <a href="{{ url('user/profile/'.Auth::user()->id) }}" class="dropdown-item dropdown-footer">Edit Profile</a>
          <div class="dropdown-divider"></div>
            <a href="{{ url('proses/logout') }}" class="dropdown-item dropdown-footer">Log Out</a>
          </div>
        </li>
       
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->