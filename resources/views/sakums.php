
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="gradient-custom">



    <nav class="navbar navbar-expand-sm navbar-dark ">
      <a class="navbar-brand" href="#">CONV</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Sākums <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
          <a href="#collapse3" class="nav-link" id="toggle">Get converter</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brands</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="https://www.adidas.com/us">Adidas</a>
              <a class="dropdown-item" href="https://www.vans.com/en-us">Vans</a>
              <a class="dropdown-item" href="https://www.nike.com/">Nike</a>
            </div>
          </li>
        </ul>
       
      </div>
    </nav>






<div class="teksts">
  <h2> Do you know how long is your feet in centimeters? </h2>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <h4>1. If you do know, then click "next" to select a brand </h4>
        </div>
        <div class="col-sm">
          <h4>2. If you dont know, you can easly measure its lenght (Preferably in cm) </h4>
        </div>
        <div class="col-sm">
          <h4>3. In case you cant measure it in cm, there is converter at the top </h4>
        </div>
      </div>
    </div>
</div>
            
            
      
                
<div class="form-group col-sm-4" id="collapse3" style="display:none">
                    
                <p>
        <label>Inches: </label>
        <input class="form-control" id="inputFeet" type="number" placeholder="Inches"
        oninput="lengthConverter(this.value)" onchange="lengthConverter(this.value)">
      </p>
      <p>cm: <span id="outputMeters"></span></p>

    <script>
              function lengthConverter(valNum) {
        document.getElementById("outputMeters").innerHTML = valNum * 2.54;
      }

    
    </script>
                



                
</div>





                


    <div class="container text-center">
            <a id="nulll" href="/next.php" class="btn btn-info" role="button">Next</a>
            

            </div>




                <script>
                $(document).ready(function () {
                    $('.nav-link').click(function () {
                        var collapse3_content_selector = $(this).attr('href');
                        var toggle_switch = $(this);
                        $(collapse3_content_selector).toggle(function () {
                            if ($(this).css('display') == 'none') {
                                toggle_switch.html('Get converter');
                            } else {
                                toggle_switch.html('Hide converter');
                            }
                        });
                    });

                });




                </script>






</body>
</html>

<style>
  .container {
    padding-top: 100px;
  }

  .teksts {
    padding-top: 100px;
    text-align: center;
    color: white;
  }
#collapse {
  background-color: transparent;
}
.balts {
  color: white;
}

.lielis {

  
  
  width: 35%;
  display: inline-block;
}

.form-control {
    margin: auto;  
  }

.nav-toggle3 {
  
  border: none;
  
  background: none;
  color: white;
}
.lieliss {
  padding-top: 50px;
  
  width: 15%;
  display: inline-block;
}

#yess {
  padding-left: 100px;
  padding-top: 150px;
  color: white;
}
  .conv {
    display:none;
    padding-left: 100px;
    font-size: 16px;
    padding-top: 100px;
    color:white;
  
  }
#inputFeet {
  border-radius: 7px;
}

#inputPounds {
  border-radius: 7px;
}

  .convv {
    text-align: left;
    color:white;
  }
    .form-group {
      margin: auto;
      padding-bottom: 25px;
        padding-top: 40px;
        
        
        color:white;
        
    }
.navbar-brand {
  font-size: 35px;
}
    .gradient-custom {

background: #A71D31;

background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

background: linear-gradient(to right,#000000,#00A2FF)
}

</style>