<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register_dark.css') }}">
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

        <div class="deda">
            <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px" width="30px">
        </div>
    </nav>


    <div class=lielaiss>
        <img class="imagew" src="{{ asset('/image/wallpaper.jpg') }}" alt="" width="100%" height="954px">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div id= "shadoww" class="card flex-row my-5 border-0 rounded-3 overflow-hidden">

                <div class="card-img-left d-none d-md-flex">
                  {{-- <video  alt="" width="100%" height="700px" class="imageww" autoplay loop muted>
                    <source src="{{ asset('/image/video.mp4') }}" type="video/mp4">
                  </video> --}}
                  <img class="imageww" src="{{ asset('/image/wallpaper3.png') }}" alt="" width="100%" height="100%">
                </div>
                
                <div id="carder" class="card-body p-4 p-sm-5">
                  <h2 class=" text-center mb5 fw-light fs5">Register</h2>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
      
                    <div class="form-floating mb-3">
                      <input name="name" type="text" class="form-control1" id="floatingInputUsername" placeholder="Username" required autofocus>
                    </div>
      
                    <div class="form-floating mb-3">
                      <input name="email" type="email" class="form-control1" id="floatingInputEmail" placeholder="Email address">
                    </div>
      
                    <hr>
      
                    <div class="form-floating mb-3">
                      <input name="password" type="password" class="form-control1" id="floatingPassword" placeholder="Password">
                    </div>
      
                    <div class="form-floating mb-3">
                      <input name="password_confirmation" type="password" class="form-control1" id="floatingPasswordConfirm" placeholder="Confirm Password">
                    </div>
      
                    <div class="d-grid mb-2">
                      <button id="vjg2" class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                    </div>
      
  
      
                    <hr class="my-4">
                    <a id="a1" class="d-block text-center mt-2 small" href="/" >Have an account? Go back to login</a>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>




    <div class="bak">
        <div class="box-1">
            <a id="nulll" href="/" class="btn2 btn2-one" role="button"><span>Back Home</span></a>
        </div>
    </div>


    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>

</html>
