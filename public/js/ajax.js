$("#table").change(function(){
    var table = $(this).find(":selected").val();
    $.ajax({
        type: "GET",
        url: "/api//"+table,
        dataType: "json",   //expect html to be returned
        success: function(data){
        
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   });
})
