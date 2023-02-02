
$("#ident").on('change', function(){
    var table = $("#ident").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/api/getsize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.v_uk
                    eu=val.v_eu
                    usm=val.v_usm
                    usw=val.v_usw
                    
                document.getElementById("size1").innerHTML = val.v_eu;
                document.getElementById("size2").innerHTML = val.v_uk;
                document.getElementById("size3").innerHTML = val.v_usm;
                document.getElementById("size4").innerHTML = val.v_usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});

