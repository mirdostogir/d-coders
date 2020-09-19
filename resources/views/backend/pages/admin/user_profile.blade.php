<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description"
    content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('styles/shards-dashboards.1.1.0.min.css')}}">
  <link href="{{ asset('css/textanimation.css') }}" rel="stylesheet">
 

  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<div class="container-fluid">
  <div class="row">
    <!-- Main Sidebar -->
    @include('layouts.backend.sidebars.useraside')
    <!-- End Main Sidebar -->
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
      <div class="main-navbar sticky-top bg-white">
        <!-- Main Navbar -->
   
      </div>
      <!-- / .main-navbar -->
     
      <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title"> Profile</h3>
          </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-small mb-4 pt-3">
              <div class="card-header border-bottom text-center">
                <div class="mb-3 mx-auto">
                
                  <img class="rounded-circle " src="/uploads/avatars/{{auth()->user()->avatar}}" alt="User Avatar"style="width:150px; height:150px; float:left; border-radius:50px ;border:2px solid #3490dc; margin-right:25px;"> </div>
              
                <h3 class="mb-0">{{auth()->user()->name}}</h3>
                <span class="fast-flicker">{{auth()->user()->email}}</span>
                <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                  <i class="material-icons mr-1">person_add</i>Follow</button>
                 <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                  <i class="material-icons mr-1">person_add</i>Follower</button>




              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-4">
                     
                  <div class="progress-wrapper">

                    <strong class="text-muted d-block mb-2"></strong>
                    <div class="progress progress-sm">
                        <br>
                          <br>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card card-small mb-4">
              <div class="card-header border-bottom">
                <h6 class="m-0">Account Details</h6>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                  <div class="row">
                    <div class="col">
                    <form action="{{url('backend/pages/admin/admin_profile')}}" method="POST"  enctype="multipart/form-data">
                    
                          @csrf
                       

                   @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" 
                              value="{{auth()->user()->name}}"> </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control"  id=" email" name="email" 
                              value="{{auth()->user()->email}}"> </div>
                        </div>
                      
                          
                          
                        <div class="form-group">
                          
                   <div class="form-group col-md-20">
                  <input type="file" name="avatar"  id="avatar" class="form-control">
                  </div>
                 
                        </div>
                        <button type="submit" class="btn btn-accent">Update Account</button>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->
      </div>
      <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
      
        <span class="copyright ml-auto my-auto mr-2">Copyright © 2020
          <a href="https://designrevision.com" rel="nofollow">RootCoder</a>
        </span>
      </footer>
    </main>
  </div>
</div>

<script>

$('.text').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});
</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="scripts/extras.1.1.0.min.js"></script>
<script src="scripts/shards-dashboards.1.1.0.min.js"></script>
</body>

</html>