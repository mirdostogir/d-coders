 
<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>User Dashboard</title>
  <meta name="description"
    content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('styles/shards-dashboards.1.1.0.min.css')}}">
  <link rel="stylesheet" href="{{asset('styles/extras.1.1.0.min.css')}}">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<!-- Main Sidebar -->
@include('layouts.backend.sidebars.useraside')
<!-- End Main Sidebar -->
<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
  <div class="main-navbar sticky-top bg-white">
    <!-- Main Navbar -->
    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
      <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
        <div class="input-group input-group-seamless ml-3">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-search"></i>
            </div>
          </div>
          <input class="navbar-search form-control" type="text" placeholder="Search for something..."
            aria-label="Search">
        </div>
      </form>
      <ul class="navbar-nav border-left flex-row ">
        <li class="nav-item border-right dropdown notifications">
          <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="nav-link-icon__wrapper">
              <i class="material-icons">&#xE7F4;</i>
              <span class="badge badge-pill badge-danger">2</span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">
              <div class="notification__icon-wrapper">
                <div class="notification__icon">
                  <i class="material-icons">&#xE6E1;</i>
                </div>
              </div>
              <div class="notification__content">
                <span class="notification__category">Analytics</span>
                <p>Your website’s active users count increased by
                  <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
              </div>
            </a>
            <a class="dropdown-item" href="#">
              <div class="notification__icon-wrapper">
                <div class="notification__icon">
                  <i class="material-icons">&#xE8D1;</i>
                </div>
              </div>
              <div class="notification__content">
                <span class="notification__category">Sales</span>
                <p>Last week your store’s sales count decreased by
                  <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
              </div>
            </a>
            <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false">
            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="" style="width:50px; height:50px; position:absolute:top:10px; left:10px; border-radius:50%">
            <span class="d-none d-md-inline-block"> {{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-small">
            <a class="dropdown-item" href="{{ url('backend/pages/admin/admin_profile') }}">
              <i class="material-icons">&#xE7FD;</i> Profile</a>
            <a class="dropdown-item" href="components-blog-posts.html">
              <i class="material-icons">vertical_split</i> Orders</a>
      
              
                                    <a class="dropdown-item" href="{{ route('logout') }}"

                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-power-off"> </i>  {{ __('Logout') }}
                                    </a>

                                
                                 </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
        </li>
      </ul>
     
      <nav class="nav">
        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
          data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
          <i class="material-icons">&#xE5D2;</i>
        </a>
      </nav>
    </nav>
  </div>
  <!-- / .main-navbar -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
    
      </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
      <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Orders</span>
                <h6 class="stats-small__value count my-3">{{ \App\Product::all()->count() }}</h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">{{ \App\Product::all()->count()/100 }}%</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-1"></canvas>
          </div>
        </div>
      </div>
   
  
    

    
    </div>
    <!-- End Small Stats Blocks -->







    <!-- Small Stats Blocks -->
  
    <!-- End Small Stats Blocks -->
    <div class="row">
      <!-- Users Stats -->
      <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
          <div class="card-header border-bottom">
            <h6 class="m-0">Users</h6>
          </div>
          <div class="card-body pt-0">
           .....
         
          </div>
        </div>
      </div>
      <!-- End Users Stats -->
      <!-- Users By Device Stats -->
    
      <!-- End Users By Device Stats -->
      <!-- New Draft Component -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

      </div>
      <!-- End New Draft Component -->
      <!-- Discussions Component -->
   
      <!-- End Discussions Component -->
      <!-- Top Referrals Component -->
   
      <!-- End Top Referrals Component -->
    </div>
  </div>
 @include('layouts.backend.footers.adminfooter')
</main>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="{{asset('scripts/extras.1.1.0.min.js')}}"></script>
<script src="{{asset('scripts/shards-dashboards.1.1.0.min.js')}}"></script>
<script src="{{asset('scripts/app/app-blog-overview.1.1.0.js')}}"></script>
</body>

</html>