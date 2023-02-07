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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/darkmode.css') }}">
    <meta name="color-scheme" content="dark light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
</head>

<body>


    <!-- Augšā navbars -->


    <nav id="dedd" class="navbar navbar-expand-sm navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample03">
        </div>
        </ul>



        <div class="deda">
            <input onclick="myFunction31()" class="dark-mode-toggle" type="checkbox" id="toggle-btn" />
            <label for="toggle-btn">


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

                
            </label>
        </div>
        </div>
    </nav>


    <!-- Sākuma teksts -->

<img class="imagew" src="{{ asset('/image/wallpaper1.jpg') }}" alt="" width="100%" height="550px">
    <div class="teksts">
        <div class="mainit">
            <img id="imgg" src="{{ asset('/image/LOGO.png') }}" alt="Girl in a jacket" width="100" height="50"
            class="saturate">
            <h4 id="virsr"> Do you know how long is your feet in centimeters? </h4>
        </div>
    {{-- <hr /> --}}
        
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


    <!-- Converter -->


    {{-- <hr /> --}}
            <div class="converter" id="collapse3" style="display:none">
                <div class="form-group col-sm-4">

                    <div class="de">
                        <a>Inches: </a>
                        <input id="inputInches" class="form-control" type="number" placeholder="Inches"
                            oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                    </div>
                    <div class="sk">
                        <a>Cm: </a>
                        <input id="inputcm" class="form-control" type="number" placeholder="Cm"
                            oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                    </div>
                </div>
            </div>


    <!-- Poga -->


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
