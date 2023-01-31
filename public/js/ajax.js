
//     setTimeout(function() {
// console.log('e');
// }, 500);



$("#ident").on('change', function(){
    var table = $("#ident").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/api/getsize/"+table,
        dataType: "json",   //expect html to be returned
        success: function(data){
                $.each(data.data[0], function(key,val) {
                    
                });
            
            // console.log(data)
            // you have the array aka data, now put it in view
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});


