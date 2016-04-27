$(document).ready(function(){



        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
    //pentru modal edit
    $(document).on('click', '.editProdus', function () {
        var id = $(this).attr('data-id');

        $('#modalEditProdus').empty();
        $.ajax({
            url: GLOBAL.base_url + "/editprodus/" + id,
            dataType: 'html',
            success: function (result) {
                $('#modalEditProdus').append(result);

                $('#modalEditProdus').modal('show');
            }
        });
    });

    //pentru modal Detalii
    $(document).on('click', '.detaliiProdus', function () {
        var id = $(this).attr('data-id');

        $('#modalDetaliiProdus').empty();
        $.ajax({
            url: GLOBAL.base_url + "/detaliiprodus/" + id,
            dataType: 'html',
            success: function (result) {
                $('#modalDetaliiProdus').append(result);

                $('#modalDetaliiProdus').modal('show');
            }
        });
    });
    $(document).ready(function($) {
    $('[data-toggle="tooltip"]').tooltip();

    // Add smooth scrolling to all links in navbar + footer link
    $('a[href^="#myPage"]').on('click.navbar', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();
        var nav = $('.navbar');
        if (nav.length) {
            var contentNav = nav.offset().top;
        }
        alert(contentNav);
        // Store hash
        var target = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area

        $('html, body').animate({


            'scrollTop': $(target).offset().top }, 900,'swing', function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = target;
        });
        });

    });
 })

