<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/s_design.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="gradient-custom">


<!-- Augšā navbars -->


    <nav class="navbar navbar-expand-sm navbar-dark ">
        <a class="navbar-brand" href="#">CONV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a href="#collapse3" class="nav-link" id="toggle">Get converter</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Brands</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="https://www.adidas.com/us">Adidas</a>
                        <a class="dropdown-item" href="https://www.vans.com/en-us">Vans</a>
                        <a class="dropdown-item" href="https://www.nike.com/">Nike</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


<!-- Sākuma teksts -->


    <div class="teksts">
        <h2> Do you know how long is your feet in centimeters? </h2>
        <div class="container">
            <div class="row">
                <div id="ir1" class="col-sm">
                    <div class="uu1">
                        <img id="rod1" src="https://instantpot.com/wp-content/uploads/2017/07/Thumbs-Up-Icon-red.png" />
                    </div>
                    <div id="vajg1" class="col-sm">
                        <h4>1.<br> If you do know, then click "next" to select a brand </h4>
                    </div>
                </div>
                <div id="ir2" class="col-sm">
                    <div class="uu2">
                        <img id="rod2" src="https://run-of.com/wp-content/uploads/2022/03/foot-measure.png" />
                    </div>
                    <div id="vajg2" class="col-sm">
                        <h4>2.<br> If you dont know, you can easly measure its lenght (Preferably in cm) </h4>
                    </div>
                </div>
                <div id="ir3" class="col-sm">
                    <div class="uu3">
                        <img id="rod3"
                            src="https://icons.veryicon.com/png/o/education-technology/ecology/vice-versa.png" />
                    </div>
                    <div class="col-sm">
                        <h4>3.<br> In case you cant measure it in cm, there is converter at the top </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Converter -->


    <div class="converter" id="collapse3" style="display:none">
        <hr />
        <div class="form-group col-sm-4">

            <div class="de">
                <label>Inches: </label>
                <input id="inputInches" class="form-control" type="number" placeholder="Inches"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="sk">
                <label>Cm: </label>
                <input id="inputcm" class="form-control" type="number" placeholder="Cm"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>


<!-- Converter funkcija + "pazūd/parādās funkcija"-->


            <script>
            function lengthConverter(source, valNum) {
                valNum = parseFloat(valNum);
                var inputInches = document.getElementById("inputInches");
                var inputcm = document.getElementById("inputcm");
                if (source == "inputInches") {
                    inputcm.value = (valNum / 0.39370).toFixed(2);
                }
                if (source == "inputcm") {
                    inputInches.value = (valNum * 0.39370).toFixed(2);
                }
            }

            $(document).ready(function() {
                $('.nav-link').click(function() {
                    var collapse3_content_selector = $(this).attr('href');
                    var toggle_switch = $(this);
                    $(collapse3_content_selector).toggle(function() {
                        if ($(this).css('display') == 'none') {
                            toggle_switch.html('Get converter');
                        } else {
                            toggle_switch.html('Hide converter');
                        }
                    });
                });

            });
            </script>
        </div>
    </div>


<!-- Poga -->


    <div class="containerr">
        <a id="nulll" href="/next.php" class="btn btn-dark" role="button">Next</a>
    </div>

</body>

</html>