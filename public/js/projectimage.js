// Send CSRF token
$.ajaxSetup({
    headers:
    {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


//Delete Button
$(document).on("click" , ".delete-image" , function(){

    var route = $(this).attr("data-route");
    // console.log(route);

    $.ajax({
        url:route,
        type:"GET",
        success:function(dataBack)
        {
            // alert(dataBack.success);
            $("#success").html('<div class="alert alert-success text-center font-weight-bold ">'+dataBack.success+'</div>');

            $("#"+dataBack.id).remove();
        },
        error:function(xhr , status , error)
        {
            console.log("back : " + xhr.responseJSON) ;
                $("#errors").html("<div class='alert alert-danger '><strong>"+xhr.responseJSON.error+"</strong></div>")
        }
    })
})
