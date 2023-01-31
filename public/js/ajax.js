
    setTimeout(function() {
console.log('e');
}, 500);


$("#ident").change(function(){
    var table = $("#ident").find(":selected").val();
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
