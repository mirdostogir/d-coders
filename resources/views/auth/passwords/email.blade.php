<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

</head>

<body ng-app="FireCart" ng-controller="AuthController">
<style>

body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background:#fff ;
    }
    p{

        box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    }
    
</style>
  <main>
    <!--Sign In card-->
    <div class="row center">
        <!--Branding logo-->
        <div class="col s12 center-align center" style="margin-top: 1%">
            <img src="{{asset('images/d-droid-image.png')}}" alt="App Logo" class="responsive-img z-depth-3"
                 style="width:100px ; height :100px; border-radius:50px"/>
        </div>
        <div class="col s12 m10 offset-m1 l6 offset-l3">
            <div class="card sticky-action z-depth-4 card-panel hoverable"
                 style=" margin : 0px; padding : 2px">

                <!--Login fields-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="card-content" >
                    <div class="row center-align">
                       

                        <div class="input-field col s12">
                            <i class="material-icons prefix center">account_circle</i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email"
                                    class="left-align">Enter your email
                            </label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix center">dialpad</i>
                           
                  
                   <input type="submit" class="waves-effect waves-light btn" value ='Send'
                               id="submit">
                        </input>
                  
                   
                </div>
              </form>
                <!--More actions -->
                <div class="card-action "
                     style=" margin : 2px; padding-bottom:0px ;padding-top : 5px">
                    <div class="row ">

                    <div class="col s6 left-align valign-wrapper">
                                <a href="{{ route('home') }}" class="activator btn-flat white orange-text "> <i
                                        class=" fa fa-rocket orange-text white" ></i>
                                    Cancle</a>
                            </div>
                        
                            <div class="col s6 right">
                            <br>
                            <br><img src="https://img.icons8.com/nolan/64/re-enter-pincode.png"/>
                                <p>Type the email address used to set up the account and then click Send to receive an email with further instructions to reset your Password.</p>
                            </div>

                    </div>
                </div>

                <!--Hidden Actions For SignUp-->
          
            </div>
        </div>
    </div>
</main>
 
  
 <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
  
  
</body>

</html>