$(document).ready(function(){
    $(".add_station").click(function(){
       var id_user= $(this).attr('id_user');
        $.ajax({
            url:'ajax/getusersstations/'+id_user,
            DataType:'HTML',
            success:function(data){
                $('#addstationform').html(data);
                $("#addstationmodal").modal("show");


            }



        });});


        $("#example1").datepicker({
            format: "dd-mm-yyyy"
        });












    })