@extends('layouts.app')
@section('content')
    <head>
        <title>Football</title>
    </head>
    <br>
    <br>
    <div class="container">
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
                <a href='football'>  <img src="{{ asset('/img/football/slider/fotball.jpg') }}" alt="New York" width="1200" height="700" >
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
                    </div></a>
            </div>

            <div class="item">
                <a href='football'>  <img src="{{ asset('/img/football/slider/xx.jpg') }}" alt="New York" width="1200" height="700" >
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
                    </div></a>
            </div>
            <div class="item">
                <a href='football'>  <img src="{{ asset('/img/football/slider/belgia.jpg') }}" alt="New York" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
                    </div></a>
            </div>
            <div class="item">
                <a href='football'>  <img src="{{ asset('/img/football/slider/gemania.jpg') }}" alt="New York" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
                    </div></a>
            </div>
            <div class="item">
                <a href='football'>  <img src="{{ asset('/img/football/slider/france.jpg') }}" alt="New York" width="1200" height="700" >
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
                    </div></a>
            </div>
            <div class="item">
                <a href='football'>  <img src="{{ asset('/img/football/slider/italy.jpg') }}" alt="New York" width="1200" height="700" >
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
                    </div></a>
            </div>
            <div class="item">
                <a href='football'>  <img src="{{ asset('/img/football/slider/best.jpg') }}" alt="New York" width="1200" height="700" >
                    <div class="carousel-caption">
                        <h3>Football Products</h3>
                        <p>We love football !</p>
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

    <div class="container">
        <div class="row"><a href='#'>
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Game kit</div>
                        <div class="panel-body"><img
                                    src="{{ asset('/img/football/echipament.jpg') }}"
                                    class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                        <div class="panel-footer">-24%</div>
                    </div>
                </div>
            </a>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Training kit</div>
                    <div class="panel-body"><img src="{{ asset('/img/football/antrenament.jpg') }}"
                                                 class="img-responsive" style="width:100%" alt="Image" width="50"
                                                 height="70"></div>
                    <div class="panel-footer">-30%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Presentation kit</div>
                    <div class="panel-body"><img src="{{ asset('/img/football/prezentare.jpg') }}"
                                                 class="img-responsive" style="width:100%" alt="Image" width="50"
                                                 height="70"></div>
                    <div class="panel-footer">-10%</div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Referee kit</div>
                    <div class="panel-body"><img src="{{ asset('/img/football/arbitru.jpg') }}"
                                                 class="img-responsive" style="width:100%" alt="Image" width="50"
                                                 height="70"></div>
                    <div class="panel-footer">-15%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Accessories and balls</div>
                    <div class="panel-body"><img src="{{ asset('/img/football/mingi.jpg') }}"
                                                 class="img-responsive" style="width:100%" alt="Image" width="50"
                                                 height="70"></div>
                    <div class="panel-footer">-20%</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">LifeStyle</div>
                    <div class="panel-body"><img src="{{ asset('/img/football/lifestyle.jpg') }}"
                                                 class="img-responsive" style="width:100%" alt="Image" width="50"
                                                 height="70" s></div>
                    <div class="panel-footer">-5%</div>
                </div>
            </div>
        </div>
    </div><br><br>

    <footer class="container-fluid text-center">
        <form class="form-inline">Get deals:
            <input type="email" class="form-control" size="50" placeholder="Email Address">
            <button type="button" class="btn btn-danger">Sign Up</button></form>
            <p>We love sports !</p>
            <p>TehInt.Sports Copyright</p>

    </footer>

@endsection
