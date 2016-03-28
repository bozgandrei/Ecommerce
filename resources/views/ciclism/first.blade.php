@extends('layouts.app')

@section('content')
    <head>
        <title>Ciclism</title>
    </head>

        <div class="container text-center">
            <div class="jumbotron">
            <h1>Online Store</h1>
            <p>Mission, Vission & Values</p>
        </div>
    </div>
<!--
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>
-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Road Bike</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/cursiera.jpg') }}" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">-20%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">MTB</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/mtb.jpg') }}" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">-20%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">Parts</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/shimano.jpg') }}" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">-40%</div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Wheels</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/roti.jpg') }}"" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">-10%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Head Gear</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/costum.jpg') }}" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">-50%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Bottles</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/pantofi.jpg') }}" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">-50 Ron</div>
                </div>
            </div>
        </div>
    </div><br><br>

    <footer class="container-fluid text-center">
        <p>Online Store Copyright</p>
        <form class="form-inline">Get deals:
            <input type="email" class="form-control" size="50" placeholder="Email Address">
            <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
    </footer>

@stop

