
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Cm</th>
                <th scope="col">EU</th>
                <th scope="col">UK</th>
                <th scope="col">US M</th>
                <th scope="col">US W</th>
              </tr>
            </thead>
                <tbody>
                    <td id="data">                     
                    </td>
            </tbody>
          </table>
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