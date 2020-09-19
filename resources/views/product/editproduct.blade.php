
@extends('layouts.notification')
@extends('layouts.app')

@section('content')
<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Dashboard</title>
  <meta name="description"
    content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('styles/shards-dashboards.1.1.0.min.css')}}">
  <link rel="stylesheet" href="{{asset('styles/extras.1.1.0.min.css')}}">
  

<!-- JQuery -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
</head>

<!-- Main Sidebar -->
@include('layouts.backend.sidebars.adminaside')
<!-- End Main Sidebar -->
<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
<br>
<br>
  <div class="main-navbar sticky-top bg-white">
    
  <!-- / .main-navbar -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Edit products</h3>
      </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
   



    <!-- End Small Stats Blocks -->







    <!-- Small Stats Blocks -->

    <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('all.product') }}" class="btn btn-info">All Product</a>
       
      <hr>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif

       <form action="{{ url('update/product/'.$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Name</label>
             <input type="text" class="form-control" value="{{ $product->name }}" name="name" required >
           </div>
         </div>
         <br>
          <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Category</label>
            <select class="form-control" name="categorie_id">
              @foreach($categorie as $row)
            	<option value="{{ $row->id }}"  <?php if($row->id == $product->categorie_id) echo "selected"; ?> >{{ $row->name }}</option>
            	@endforeach
            </select>
           </div>
         </div>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label></label>
           
           </div>
         </div>
         <br>
         <div class="control-group">
           <div class="form-group col-xs-12 ">
             <label>New Image</label>
             <input type="file" class="form-control"   name="image"><br>
  				Old Image: <img src="{{ URL::to($product->image) }}" style="height: 40px; width: 80px; " >
  				<input type="hidden" name="old_photo" value="{{ $product->image }}">
           </div>
         </div><br>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Description</label>
             <textarea rows="5" class="form-control" required name="description">
             	{{ $product->description }}
             </textarea>
            
           </div>
         </div>

         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Price</label>
             <textarea rows="5" class="form-control" required name="price">
             	{{ $product->price }}
             </textarea>
            
           </div>
         </div>
         <br>
         <div id="success"></div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
         </div>
       </form>
     </div>
   </div>
</div>

  
     
      <!-- End Users By Device Stats -->
      <!-- New Draft Component -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

      </div>
     
      
   
      <!-- End Discussions Component -->
      <!-- Top Referrals Component -->

<!-- Button trigger modal -->


<!-- Modal -->


      <!-- End Top Referrals Component -->
    </div>
  </div>
  <footer class="main-footer d-flex p-2 px-3 bg-white border-top">

    <span class="copyright ml-auto my-auto mr-2">Copyright © 2020
      <a href="https://designrevision.com" rel="nofollow">RootCoder</a>
    </span>
  </footer>
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
<script src="{{ asset('scripts/extras.1.1.0.min.js') }}" defer"></script>
<script src="{{asset('scripts/shards-dashboards.1.1.0.min.js')}}"></script>
<script src="{{asset('scripts/app/app-blog-overview.1.1.0.js')}}"></script>
</body>

</html>
@endsection
