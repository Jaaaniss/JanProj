<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Converter</title>
</head>

<body id="gradient-custom" class="no-chat-button gl-modal-open" style="overflow-y: scroll;" data-padding-right="85"
    img="https://jooinn.com/images/cloth-background-5.png">

    <div class="viskopa">
        <div class="augsatext">
            <h4 id="textt"> Please select your size below (in centimeters...) </h4>
            <div class="zimoli">
                <div class="vanss">
                    <select id="ident" class="form-control1">
                        @foreach ($vans as $value)
                            <option value="" disabled selected hidden>Vans:</option>
                            <option id="ident" value="{{ $value->v_cm }}">{{ $value->v_cm }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="nikee">
                    <select id="ident2" class="form-control1">
                        @foreach ($vans as $value)
                            <option value="" disabled selected hidden>Nike:</option>
                            <option id="ident2" value="{{ $value->v_cm }}">{{ $value->v_cm }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="adidass">
                    <select id="ident3" class="form-control1">
                        @foreach ($vans as $value)
                            <option value="" disabled selected hidden>Adidas:</option>
                            <option id="ident3" value="{{ $value->v_cm }}">{{ $value->v_cm }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class=lielaiss>
        <div class="row1">
            <div class="col3">
                <div class="card"
                    style="width: 16rem; height: 34rem;     --bs-card-bg: #646464; box-shadow: -25px 30px 25px rgb(0 0 0 / 90%);">
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQnv9ij36ZmZzFbQ3agBIbpsB-sXXJkqqTEGMP3KKyqgNEfgLKS"
                        class="card-img-top" alt="...">
                    <div class="card1-body">
                        <h4 class="card-title">Vans footwear</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Your EU size is --><span id="size1"></span></li>
                        <li class="list-group-item">Your UK size is --><span id="size2"></span></li>
                        <li class="list-group-item">Your US M size is --><span id="size3"></span></li>
                        <li class="list-group-item">Your US W size is --><span id="size4"></span></li>
                        <li class="list-group-item">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse" class="nav-toggle">More info</a1>
                            </div>
                            <div id="collapse" style="display:none">
                                <p1>Size conversions are approximate. Shoes should be tried on for proper fit.</p1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col3">
                <div class="card"
                    style="width: 16rem; height: 34rem;     --bs-card-bg: #646464; box-shadow: -25px 30px 25px rgb(0 0 0 / 90%);">
                    <img src="https://th.bing.com/th/id/OIP.-5BzDHfG77aUDltzc_LIKQAAAA?pid=ImgDet&rs=1"
                        class="card-img-top" alt="...">
                    <div class="card1-body">
                        <h4 class="card-title">Nike footwear</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Your EU size is --><span id="size5"></span></li>
                        <li class="list-group-item">Your UK size is --><span id="size6"></span></li>
                        <li class="list-group-item">Your US M size is --><span id="size7"></span></li>
                        <li class="list-group-item">Your US W size is --><span id="size8"></span></li>
                        <li class="list-group-item">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse2" class="nav-toggle2">More info</a1>
                            </div>
                            <div id="collapse2" style="display:none">
                                <p1>Nike shoes fit slightly narrow at true to size, generally speaking.</p1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col3">
                <div class="card"
                    style="width: 16rem; height: 34rem;     --bs-card-bg: #646464; box-shadow: -25px 30px 25px rgb(0 0 0 / 90%);">
                    <img src="https://seeklogo.com/images/A/adidas-logo-49D5BEBA90-seeklogo.com.png"
                        class="card-img-top" alt="...">
                    <div class="card1-body">
                        <h4 class="card-title">Adidas footwear</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Your EU size is --><span id="size9"></span></li>
                        <li class="list-group-item">Your UK size is --><span id="size10"></span></li>
                        <li class="list-group-item">Your US M size is --><span id="size11"></span></li>
                        <li class="list-group-item">Your US W size is --><span id="size12"></span></li>
                        <li class="list-group-item">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse3" class="nav-toggle3">More info</a1>
                            </div>
                            <div id="collapse3" style="display:none">
                                <p1>For tight fit, go one size down. For loose fit, go one size up.</p1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bak">
        <div class="box-1">
            <a id="nulll" href="/" class="btn2 btn-one" role="button"><span>Back Home</span></a>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
</body>

</html>
