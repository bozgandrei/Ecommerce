<!DOCTYPE html>
<html lang="en">
<head>
    <title>TehInt.Sports</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="http://localhost/Ecommerce/resources/img/Logo.bmp">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px/1.8 Lato, sans-serif;
            color: #777;

        }
        h1,h3, h4 {
            margin: 10px 0 30px 0;
            letter-spacing: 10px;
            font-size: 20px;
            color: #111;
        }


        .carousel-inner img {
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%); /* make all photos black and white */
            width: 100%; /* Set width to 100% */

            margin: auto;
        }
        .carousel-caption h3 {
            color: #FFFFFF !important;
        }
        @media (max-width: 600px) {
            .carousel-caption {
                display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
            }
        }

        .bg-1 h3 {color: #fff;}
        .bg-1 p {font-style: italic;}

        .thumbnail p {
            margin-top: 15px;
            color: #555;
        }

        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
        }
        footer a {
            color: #f5f5f5;
        }
        footer a:hover {
            color: #777;
            text-decoration: none;
        }

        textarea {
            resize: none;
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container text-center">
    <img src= "{{ asset('/img/Logo.bmp') }}" alt="New York" width="300" height="300">
<h1> TehInt.Sports </h1>
    <h3>We Love Sports!</h3>
        <h4>Choose Wanted Products.</h4>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href='football'>  <img src="{{ asset('/img/fotball.jpg') }}" alt="New York" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Football Products</h3>
                <p>We love football !</p>
            </div></a>
        </div>

        <div class="item">
            <a href='ciclism'> <img src="{{ asset('/img/ciclism.jpg') }}" alt="Chicago" width="1200" height="700">
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
</body>
</html>