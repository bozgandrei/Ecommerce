<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <script type="text/javascript" src="{{URL::asset('/js/jquery-1.12.0.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/app.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('css/datepicker.css')}}">
    <script type="text/javascript" src="{{URL::asset('/js/bootstrap-datepicker.js')}}"></script>
</head>

<body>
<div class="container">
    @yield('nav')


    @yield('content')


</div>
</body>


</html>