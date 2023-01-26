$("#table").change(function(){
    var table = $(this).find(":selected").val();
    var sensor_id=$("#sensor_id").find(":selected").val();
    $.ajax({
        type: "GET",
        url: "/api/gettime/"+table,
        dataType: "json",   //expect html to be returned
        success: function(data){
            $("#fromTime").empty();
            $("#toTime").empty();
           $.each(data.date, function(key){
            $("#fromTime").append(`
                <option value="${data.date[key]}">${data.date[key]}</option>
            `)
            $("#toTime").append(`
                <option value="${data.date[key]}">${data.date[key]}</option>
            `)
           })
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   });
})
