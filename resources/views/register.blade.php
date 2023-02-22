
@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/register_dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">


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
                      <button id="vjg2" class="btn2 btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
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

@endsection