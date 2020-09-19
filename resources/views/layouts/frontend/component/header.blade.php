 <!-- header -->

 <div class="header" id="home">
        <div class="container">
            <ul>
            <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 20;
                height: 5vh;
                margin: 0;
            }

            .full-height {
                height: 3vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

          
        </div>
                <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:d-droid@hotmail.com">d-droid@hotmail.com</a></li>
                        
            </ul>
        </div>
    </div>
    <!-- //header -->
    <!-- header-bot -->
    <div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            <div class="col-md-4 header-middle">
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Search here..." required="">
                    <input type="submit" value=" ">
                    <div class="clearfix"></div>
                </form>
            </div>
            <!-- header-bot -->
            <div class="col-md-4 logo_agile">
                <h1><a href="{{url('index')}}"><span>D</span>droid Shop <i class="fa fa-shopping-bag top_logo_agile_bag"
                            aria-hidden="true"></i></a></h1>
            </div>
            <!-- header-bot -->
            <div class="col-md-4 agileits-social top_content">
                <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                    <li class="share">Share On : </li>
                    <li><a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a></li>
                </ul>



            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //header-bot -->
    <!-- banner -->
    <div class="ban-top">
        <div class="container">
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                            <li class=" menu__item"><a class="menu__link" href="">Home</a></li>
                                <li class=" menu__item"><a class="menu__link" href="{{url('about')}}">About</a></li>
                                <li class="nav-item dropdown">
                                    
                    
            <a href="{{ url('shop') }}"  class="dropdown-toggle menu__link" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn"  >Shop<span class="caret"></span></a>
       
   
            <div class="dropdown dropdown-inline">
                                </li>
                           
                             
                                <li class=" menu__item"><a class="menu__link" href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="top_nav_right">
                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                
                        <a class="w3view-cart" href="{{route('cart')}}"><i
                                class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                  

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //banner-top -->