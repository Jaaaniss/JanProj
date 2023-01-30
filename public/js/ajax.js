$("#123").change(function(){
    var table = $("#123").find(":selected").val();
    console.log(table)
    $.ajax({
        type: "GET",
        url: "/api/getsize/"+table,
        dataType: "json",   //expect html to be returned
        success: function(data){
            console.log(data)
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   });
})
