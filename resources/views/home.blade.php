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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sakums.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dark.css') }}">
    <meta name="color-scheme" content="dark light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
</head>

<body>

    <nav id="dedd" class="navbar navbarr navbar-dark ">
            <div class="deda">
                <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px" width="30px">
            </div>
            <div class="dedis">
                <li class="dropdown-menu-left">
                    <div class="dropdown-menu ">
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item-dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                  </li>
            </div>
    </nav>

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

</body>

</html>
