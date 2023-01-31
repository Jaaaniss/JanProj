
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<!-- Visi zīmoli -->


<body id="gradient-custom" class="no-chat-button gl-modal-open" style="overflow-y: scroll;" data-padding-right="85"
img="https://jooinn.com/images/cloth-background-5.png">

<div class="flex flex-col py-1 ">
    <div class="rounded-lg border-4 border-gray-500/50">
        

    

    

        <select id="ident">
            @foreach($vans as $value)
                <option id="ident" value="{{$value->v_cm}}" class="px-2" style="color: #000">{{ $value->v_cm }}</option>
            @endforeach
        </select>
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQnv9ij36ZmZzFbQ3agBIbpsB-sXXJkqqTEGMP3KKyqgNEfgLKS" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Vans footwear</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Tavs EU izmers ir <span id="size1"></span></li>
              <li class="list-group-item">Tavs UK izmers ir <span id="size2"></span></li>
              <li class="list-group-item">Tavs US M izmers ir <span id="size3"></span></li>
              <li class="list-group-item">Tavs US W izmers ir <span id="size4"></span></li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Shop</a>
              <a href="#" class="card-link">More info</a>
            </div>
          </div>
    </div>
</div>


<!-- VANS bilde un informācija -->


    <div class=lielss>
        <div class="liels1">
            <div class="lala">
                <img href="#collapse" class="nav-toggle"
                    src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQnv9ij36ZmZzFbQ3agBIbpsB-sXXJkqqTEGMP3KKyqgNEfgLKS" />
            </div>
            <div id="collapse" style="display:none">


<!-- Izmēra ievade un poga -->


                <div class="form-group ">
                    <div class="col-md-3" id="kk">
                        <label for="usr">Your foot size (cm):</label>
                        <input type="number" class="form-control " id="usr">
                        <input class="btn btn-info" id="bb" type="button" value="Clear" onClick="Clean()" />
                    </div>


<!-- Izmēru izvade -->


                    <div class="uuu">
                        <div class="uuu1">
                            <span id="h1"></span>
                            <h1>EU - </h1>
                            <h1>UK - </h1>
                            <h1>US M - </h1>
                            <h1>US W - </h1>
                        </div>
                        <div class="uuu2">
                            <h1 style="float:center;" id="log1"></h1>
                        </div>
                    </div>
                </div>


<!-- Poga "Back to Home" -->


        <div class="bak">
            <a id="nulll" href="/" class="btn btn-info" id="bb" type="button" value="Back to Home">Back to Home</a>
        </div>

            </div>


<!-- Funkcijas, lai informācija būtu paslēpta/parādīta -->


            <script>
                $(document).ready(function() {
                    $('.nav-toggle').click(function() {
                        var collapse_content_selector = $(this).attr('href');
                        var toggle_switch = $(this);
                        $(collapse_content_selector).toggle(function() {
                            if ($(this).css('display') == 'none') {
                                toggle_switch.html('Show');
                            } else {
                                toggle_switch.html('Hide');
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $('.nav-toggle2').click(function() {
                        var collapse2_content_selector = $(this).attr('href');
                        var toggle_switch = $(this);
                        $(collapse2_content_selector).toggle(function() {
                            if ($(this).css('display') == 'none') {
                                toggle_switch.html('Show');
                            } else {
                                toggle_switch.html('Hide');
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $('.nav-toggle3').click(function() {
                        var collapse3_content_selector = $(this).attr('href');
                        var toggle_switch = $(this);
                        $(collapse3_content_selector).toggle(function() {
                            if ($(this).css('display') == 'none') {
                                toggle_switch.html('Show');
                            } else {
                                toggle_switch.html('Hide');
                            }
                        });
                    });
                });
            </script>


<!-- NIKE bilde un informācija -->


            <div class="liels2">
                <div class="lala1">
                    <img href="#collapse2" class="nav-toggle2"
                        src="https://th.bing.com/th/id/OIP.-5BzDHfG77aUDltzc_LIKQAAAA?pid=ImgDet&rs=1" />
                </div>
                <div id="collapse2" style="display:none">
                    <center><h1> Available soon!</h1></center>
                </div>
            </div>


<!-- ADIDAS bilde un informācija -->


            <div class="liels3">
                <div class="lala2">
                    <img href="#collapse3" class="nav-toggle3"
                        src="https://seeklogo.com/images/A/adidas-logo-49D5BEBA90-seeklogo.com.png" />
                </div>
                <div id="collapse3" style="display:none">
                    <center><h1> Available soon!</h1></center>
                </div>
            </div>
        </div>
        <script src="{{ asset("js/ajax.js")}}"></script>
</body>
</html>