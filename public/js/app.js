$(document).ready(function(){


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




 })

