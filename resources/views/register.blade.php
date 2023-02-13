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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/r_design.css') }}">
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
                <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px" width="30px">
        </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
              <div class="card-img-left d-none d-md-flex">
                <video  alt="" width="100%" height="700px" class="imagew" autoplay loop muted>
                    <source src="{{ asset('/image/video.mp4') }}" type="video/mp4">
                </video>
              </div>
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                <form>
    
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                    <label for="floatingInputUsername">Username</label>
                  </div>
    
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                    <label for="floatingInputEmail">Email address</label>
                  </div>
    
                  <hr>
    
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
    
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                    <label for="floatingPasswordConfirm">Confirm Password</label>
                  </div>
    
                  <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                  </div>
    

    
                  <hr class="my-4">
                  <a class="d-block text-center mt-2 small" href="/">Have an account? Sign In</a>
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/converter.js') }}"></script>

</body>

</html>
