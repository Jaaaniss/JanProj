
$("#ident").on('change', function(){
    var table = $("#ident").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/api/vanssize/"+table,
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




$("#ident2").on('change', function(){
    var table = $("#ident2").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/api/nikesize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.n_uk
                    eu=val.n_eu
                    usm=val.n_usm
                    usw=val.n_usw
                    
                document.getElementById("size5").innerHTML = val.n_eu;
                document.getElementById("size6").innerHTML = val.n_uk;
                document.getElementById("size7").innerHTML = val.n_usm;
                document.getElementById("size8").innerHTML = val.n_usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});




$("#ident3").on('change', function(){
    var table = $("#ident3").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/api/adidassize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.a_uk
                    eu=val.a_eu
                    usm=val.a_usm
                    usw=val.a_usw
                    
                document.getElementById("size9").innerHTML = val.a_eu;
                document.getElementById("size10").innerHTML = val.a_uk;
                document.getElementById("size11").innerHTML = val.a_usm;
                document.getElementById("size12").innerHTML = val.a_usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});



$("#ident4").on('change', function(){
    var table = $("#ident4").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/api/nbsize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.nb_uk
                    eu=val.nb_eu
                    usm=val.nb_usm
                    usw=val.nb_usw
                    
                document.getElementById("size13").innerHTML = val.nb_eu;
                document.getElementById("size14").innerHTML = val.nb_uk;
                document.getElementById("size15").innerHTML = val.nb_usm;
                document.getElementById("size16").innerHTML = val.nb_usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});

let btn = document.getElementById('submitbutton');
        btn.addEventListener('click', (e) => {
            console.log($('#sizeinput').val())
            $.ajax({
                type: "POST",
                url: '/api/save-size',
                data: {
                    size: $('#sizeinput').val(),
                },
                // dataType: "json",
                success: function(data){
                        console.log('a')
               },
                error: function(jqXhr, textStatus, errorMessage){
                    console.log(errorMessage)
               }
           })
        });