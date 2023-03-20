@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/next.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<div class=lielaiss>
    <div class="container">
    <div style="padding:20px; justify-content: center;" class="row">
      <div style="flex-grow: 0;" class="col">
        <div class="col">
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
      </div>
      <div style="flex-grow: 0;" class="col">
        <div class="col">
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
      </div>
      <div style="flex-grow: 0;" class="col">
        <div class="col">
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
      </div>
      <div style="flex-grow: 0;" class="col">
        <div class="col">
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
    </div>
</div>








    <div class="bak">
        <div class="box-1">
            <a id="nulll" href="/" class="btn8 btn8-one" role="button"><span>Back Home</span></a>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
@endsection
