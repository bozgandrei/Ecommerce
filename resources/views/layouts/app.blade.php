<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>Football</title> -->

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{ asset('/img/Logo.bmp') }}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <!-- Styles --><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/gmaps.js') }}"></script>
    <script src="{{URL::asset('js/gen_validatorv4.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    {{--<!-- Javascripts & Jquey -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
            type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
            type="text/javascript"></script>--}}

    <style>
        body {
            font-family: 'Lato';

        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">


<div class="container">
    <nav class="navbar navbar-default navbar-static-top">

        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/img/Logo.bmp') }}" class="img-responsive" alt="Image" width="30" height="50">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href='football'>Products</a></li>--}}
                <li class="dropdown">
                    <a class="dropdown-toggle"
                       data-toggle="dropdown"
                       href="#">
                        Products
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href='football'>Fotbal</a></li>
                        <li><a href='ciclism'>Ciclism</a></li>
                    </ul>
                <li><a href="#">Deals</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>

                @if(!Auth::guest())
                    @if(Auth::user()->tip=='ADMIN')
                        <li><a href='addprodus'>Add Product</a></li>
                    @endif
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->

                @if (Auth::guest())
                    <li><a href="{{url('/cart')}}"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>



                @else



                    <li><a href="{{url('/cart')}}"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout
                            ({{ Auth::user()->name }})</a></li>
                @endif


            </ul>
        </div>
    </nav>
</div>

@yield('content')

        <!-- JavaScripts -->

<script>
    GLOBAL = {
        base_url: "{{ url('/') }}"
    };
</script>

</body>
</html>
