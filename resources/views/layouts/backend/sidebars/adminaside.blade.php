<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
          <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
            src="{{asset('images/shards-dashboards-logo.svg')}}" alt="Shards Dashboard">
          <span class="d-none d-md-inline ml-1">Admin Dashboard</span>
        </div>
      </a>
      <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
      </a>
    </nav>
  </div>
  <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
    <div class="input-group input-group-seamless ml-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-search"></i>
        </div>
      </div>
      <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
    </div>
  </form>
  <div class="nav-wrapper">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{url('admin/home')}}">
          <i class="material-icons">edit</i>
          <span> Dashboard</span>
        </a>
      </li>
      <div class="dropdown">
       <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"> <i class="material-icons">vertical_split</i>
          <span class="caret">All Catagory & Subcatagory</span>
   </button> 
    <ul class="dropdown-menu dropdownhover-bottom">
    <li class="nav-item">
        <a class="nav-link " href="{{ url('categories') }}">
          <i class="material-icons">vertical_split</i>
          <span>All Catagory</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{ url('subcategories') }}">
          <i class="material-icons">vertical_split</i>
          <span>All Sub-catagory</span>
        </a>
      </li>
    </ul>
  </div>


      <li class="nav-item">
        <a class="nav-link " href="{{ url('all/product') }}">
          <i class="material-icons">vertical_split</i>
          <span>All Products Posts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('write/product') }}">
          <i class="material-icons">note_add</i>
          <span>Add New Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="tables.html">
          <i class="material-icons">table_chart</i>
          <span>Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('backend/pages/admin/admin_profile') }}">
          <i class="material-icons">person</i>
          <span>Admin Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="errors.html">
          <i class="material-icons">error</i>
          <span>Errors</span>
        </a>
      </li>
    </ul>
  </div>
</aside>