<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/next.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dark.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Converter</title>
</head>

<body>
    <nav id="dedd" class="navbar navbar-expand-sm navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample03">
        </div>
        </ul>
        <div class="deda">
            <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px" width="30px">
            {{-- <label for="mybtn">
                <svg class="moon" version="1.0" width="26px" height="26px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.02911 12.42C2.38911 17.57 6.75911 21.76 11.9891 21.99C15.6791 22.15 18.9791 20.43 20.9591 17.72C21.7791 16.61 21.3391 15.87 19.9691 16.12C19.2991 16.24 18.6091 16.29 17.8891 16.26C12.9991 16.06 8.99911 11.97 8.97911 7.13996C8.96911 5.83996 9.23911 4.60996 9.72911 3.48996C10.2691 2.24996 9.61911 1.65996 8.36911 2.18996C4.40911 3.85996 1.69911 7.84996 2.02911 12.42Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="sun" width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z"
                        stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </label> --}}
        </div>
        </div>
    </nav>

    <div class=lielaiss>
        <img class="imagewww" src="{{ asset('/image/wallpaper.jpg') }}" alt="" width="100%" height="949px">
        <div class="row1">
            <div class="col3">
                <div class="card" id="cardd1">
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQnv9ij36ZmZzFbQ3agBIbpsB-sXXJkqqTEGMP3KKyqgNEfgLKS" class="cardimg" alt="...">
                    <div class="card1-body">
                        <select id="ident" class="form-control1">
                            @foreach ($vans as $value)
                                <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                <option id="ident" value="{{ $value->v_cm }}">{{ $value->v_cm }}</option>
                            @endforeach
                        </select>
                    </div>
                    <ul class="list-group list-group-flush " style="font-size: 20px;">
                        <li class="listt">Your EU size --><span id="size1"></span></li>
                        <li class="listt">Your UK size --><span id="size2"></span></li>
                        <li class="listt">Your US M size --><span id="size3"></span></li>
                        <li class="listt">Your US W size --><span id="size4"></span></li>
                        <li class="list-group-item1">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse" class="nav-toggle">More info</a1>
                            </div>
                            <div id="collapse" style="display:none">
                                <p style="font-size: 18px; margin-bottom: 1px;">Size conversions are approximate. Shoes should be tried on for proper fit.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col3">
                <div class="card" id="cardd2">
                    <img src="https://th.bing.com/th/id/OIP.-5BzDHfG77aUDltzc_LIKQAAAA?pid=ImgDet&rs=1"
                        class="cardimg" alt="...">
                            <select id="ident2" class="form-control1">
                                @foreach ($nike as $value)
                                    <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                    <option id="ident2" value="{{ $value->n_cm }}">{{ $value->n_cm }}</option>
                                @endforeach
                            </select>
                    <div class="card1-body">

                    </div>
                    
                    <ul class="list-group list-group-flush" style="font-size: 20px;">
                        <li class="listt">Your EU size --><span id="size5"></span></li>
                        <li class="listt">Your UK size --><span id="size6"></span></li>
                        <li class="listt">Your US M size --><span id="size7"></span></li>
                        <li class="listt">Your US W size --><span id="size8"></span></li>
                        <li class="list-group-item1">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse2" class="nav-toggle2">More info</a1>
                            </div>
                            <div id="collapse2" style="display:none">
                                <p style="font-size: 18px; margin-bottom: 1px;">Nike shoes fit slightly narrow at true to size, generally speaking.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col3">
                <div class="card" id="cardd3">
                    <img src="https://seeklogo.com/images/A/adidas-logo-49D5BEBA90-seeklogo.com.png"
                        class="cardimg" alt="...">
                    <div class="card1-body">
                        <select id="ident3" class="form-control1">
                            @foreach ($adidas as $value)
                                <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                <option id="ident3" value="{{ $value->a_cm }}">{{ $value->a_cm }}</option>
                            @endforeach
                        </select>
                    </div>
                    <ul class="list-group list-group-flush" style="font-size: 20px;">
                        <li class="listt">Your EU size --><span id="size9"></span></li>
                        <li class="listt">Your UK size --><span id="size10"></span></li>
                        <li class="listt">Your US M size --><span id="size11"></span></li>
                        <li class="listt">Your US W size --><span id="size12"></span></li>
                        <li class="list-group-item1">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse3" class="nav-toggle3">More info</a1>
                            </div>
                            <div id="collapse3" style="display:none">
                                <p style="font-size: 18px; margin-bottom: 1px;">For tight fit, go one size down. For loose fit, go one size up.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col3">
                <div class="card" id="cardd4">
                    <img src="https://www.newbalance.com/dw/image/v2/AAGI_PRD/on/demandware.static/-/Library-Sites-NBUS-NBCA/default/dwc9cf77d7/images/page-designer/2021/april/12069_Comp_A_Mobile.jpg?sw=991&sfrm=jpg"
                        class="cardimg1" alt="...">
                    <div class="card1-body">
                        <select id="ident4" class="form-control1">
                            @foreach ($newbalance as $value)
                                <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                <option id="ident4" value="{{ $value->nb_cm }}">{{ $value->nb_cm }}</option>
                            @endforeach
                        </select>
                    </div>
                    <ul class="list-group list-group-flush " style="font-size: 20px;">
                        <li class="listt">Your EU size --><span id="size13"></span></li>
                        <li class="listt">Your UK size --><span id="size14"></span></li>
                        <li class="listt">Your US M size --><span id="size15"></span></li>
                        <li class="listt">Your US W size --><span id="size16"></span></li>
                        <li class="list-group-item1">
                            <div class="lala1">
                                <!-- <a href="https://www.adidas.com/us/shoes" class="card-link">Shop</a> -->
                                <a1 href="#collapse4" class="nav-toggle4">More info</a1>
                            </div>
                            <div id="collapse4" style="display:none">
                                <p style="font-size: 18px; margin-bottom: 1px;">Choose the larger size if your feet are between sizes. You can adjust for a better fit with socks, insoles and lacing patterns.</p>
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
    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>

</html>
