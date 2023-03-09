@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sakums.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<img class="imagew" src="{{ asset('/image/wallpaper.jpg') }}" alt="" width="100%" height="700px">


    <div class="teksts">

        <div class="mainit">
            <img id="imgg" src="{{ asset('/image/LOGO.png') }}" alt="Girl in a jacket" width="100" height="50"
            class="saturate">
            <h3 id="virsr"> Would you like to know your international shoe size? </h3>
            <h4 id="virsr2"> Do you know how long is your feet in centimeters? </h4>
        </div>


        <div class="container">

            <div class="row1" id="inv">
                <div id="ir1" class="col-sm">
                    <div class="uu1">
                        <img id="rod1"
                            src="https://instantpot.com/wp-content/uploads/2017/07/Thumbs-Up-Icon-red.png" />
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
                        <h4>3.<br> In case you cant measure it in cm, there is converter at the bottom </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

            <div class="converter" id="collapse3" style="display:none">
                <div class="form-group col-sm-4">

                    <div class="de">
                        <input id="inputInches" class="form-control" type="number" placeholder="Inches"
                            oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                    </div>
                    <div class="sk">
                        <input id="inputcm" class="form-control" type="number" placeholder="Cm"
                            oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                    </div>
                </div>
            </div>


            <div class="beigaas">
                <div class="box-1">
                    <a id="nulll" href="/next" class="btn btn-one" role="button"><span>Next</span></a>
                </div>
                <a id="dark2" href="#collapse3" class="nav-link" id="toggle">Get converter</a>
            </div>

    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/converter.js') }}"></script>
@endsection
