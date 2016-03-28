@extends('layouts.app')

@section('content')
    <head>
        <title>Ciclism</title>
    </head>
    <br>
    <br>
        <div class="container text-center">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href='ciclism'>  <img src="{{ asset('/img/ciclism.jpg') }}" alt="New York" width="1200" height="700">
                            <div class="carousel-caption">
                                <h3>Ciclism Products</h3>
                                <p>We love ciclism !</p>
                            </div></a>
                    </div>

                    <div class="item">
                        <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/2.jpg') }}" alt="Chicago" width="1200" height="700">
                            <div class="carousel-caption">
                                <h3>Ciclism Products</h3>
                                <p>We love ciclism !</p>
                            </div></a>
                    </div>

                    <div class="item">
                        <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/3.jpg') }}" alt="Chicago" width="1200" height="700">
                            <div class="carousel-caption">
                                <h3>Ciclism Products</h3>
                                <p>We love ciclism !</p>
                            </div></a>
                    </div>

                    <div class="item">
                        <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/4.jpg') }}" alt="Chicago" width="1200" height="700">
                            <div class="carousel-caption">
                                <h3>Ciclism Products</h3>
                                <p>We love ciclism !</p>
                            </div></a>
                    </div>

                    <div class="item">
                        <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/5.jpg') }}" alt="Chicago" width="1200" height="700">
                            <div class="carousel-caption">
                                <h3>Ciclism Products</h3>
                                <p>We love ciclism !</p>
                            </div></a>
                    </div>

                    <div class="item">
                        <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/6.jpg') }}" alt="Chicago" width="1200" height="700">
                            <div class="carousel-caption">
                                <h3>Ciclism Products</h3>
                                <p>We love ciclism !</p>
                            </div></a>
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

           <script>
               $(document).ready(function(){
                   // Initialize Tooltip
                   $('[data-toggle="tooltip"]').tooltip();

                   // Add smooth scrolling to all links in navbar + footer link
                   $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                       // Prevent default anchor click behavior
                       event.preventDefault();

                       // Store hash
                       var hash = this.hash;

                       // Using jQuery's animate() method to add smooth page scroll
                       // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                       $('html, body').animate({
                           scrollTop: $(hash).offset().top
                       }, 900, function(){

                           // Add hash (#) to URL when done scrolling (default click behavior)
                           window.location.hash = hash;
                       });
                   });
               })
           </script>
        </div>
    <br>
    <br>
    <br>
    <br>

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
                <div class="panel panel-primary">
                    <div class="panel-heading">MTB</div>
                    <div class="panel-body"><img src="{{ asset('/img/ciclism/mtb.jpg') }}" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">-20%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
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
        <form class="form-inline">Get deals:
            <input type="email" class="form-control" size="50" placeholder="Email Address">
            <button type="button" class="btn btn-danger">Sign Up</button>
            <p>We love sports !</p>
            <p>TehInt.Sports Copyright</p>

    </footer>

@stop

