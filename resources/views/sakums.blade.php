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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="vjg"><b>Login</b> <span class="caret"></span></a>
                    <div class="dropdown-menu ">
                        <form class="px-4 py-3">
                          <div class="mb-3">
                            <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                          </div>
                          <div class="mb-3">
                            <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                          </div>
                          <button id="vjg2" type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/register">New around here? Sign up</a>
                      </div>

                      {{-- <ul id="login-dp" class="dropdown-menu pull-left">
                          <li>
                               <div class="row">
                                      <div class="col-md-12">
                                           <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                  <div class="form-group3">
                                                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                       <input type="email" class="form-control2" id="exampleInputEmail2" placeholder="Email address" required>
                                                  </div>
                                                  <div class="form-group3">
                                                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                       <input type="password" class="form-control2" id="exampleInputPassword2" placeholder="Password" required>
                                                  </div>
                                                  <div class="form-group3">
                                                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                  </div>
                                           </form>
                                      </div>
                                      <div class="bottom text-center">
                                          New here? <a href="/register"><b>Join Us</b></a>
                                      </div>
                               </div>
                          </li>
                      </ul> --}}
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
