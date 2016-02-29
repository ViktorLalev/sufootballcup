<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="{{url('themes/sufc/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('themes/sufc/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('themes/sufc/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{url('themes/sufc/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('themes/sufc/css/main.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{url('themes/sufc/js/html5shiv.js')}}"></script>
    <script src="{{url('themes/sufc/js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{url('themes/sufc/images/ico/apple-touch-icon-72-precomposed.png')}}">
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('themes/sufc/images/logo.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     @include('partials.nav')
                     @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вход</a> </li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->team_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                
                                
                                <li><a href="{{ url('/teams') }}/{{ Auth::user()->team_name }}/edit"><i class="fa fa-btn fa-sign-out"></i>Редактирай</a></li>
                                

   
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
         

    </header>
   

     <section id="main-slider" class="no-margin">
        @yield('main-slider')
    </section><!--/#main-slider-->
    <section id="content" >
        <div class="container-fluid">
            <div class="row">
                 <div class="col-lg-2  col-lg-offset-1">
                    <h3 class="center">С подкрепата на </h3>
                    <hr>
                     <p>
                     <a href="http://students.uni-sofia.bg" target="_blank"><img src="{{url('partners/students.png')}}" alt="logo"></a>
                     </p>
                </div>  
                <div class="col-lg-9">
                     @yield('content')
                </div>        
            </div>
       
        </div>
    </section><!--/#main-slider-->
   
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Su Football Cup. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                                              
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
