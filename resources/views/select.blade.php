
@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/select.css') }}">

<img class="imagew" src="{{ asset('/image/wallpaper.jpg') }}" alt="" width="100%" height="899px">

        <div class="col-lg-10 col-xl-9 mx-auto">
            <div id= "shadoww" class="card flex-row my-5 border-0 rounded-3 overflow-hidden">
              <div id="carder" class="card-body p-4 p-sm-5">
                <div class="input-group mb-3">
                    <div class="virsra">
                        <h2>
                            Enter your size to save it for future
                        </h2>
                    </div>
                        <form class="formss" action="/select" method="post">
                            @csrf
                            <input id="sizeinput" type="text" name="foot_size_cm" class="form-control" placeholder="Enter a number" aria-label="Cm" aria-describedby="button-addon2">
                            <button class="btn10 btn10-one" type="submit" id="submitbutton">Save</button>
                        </form>
                </div>
              </div>
            </div>
          </div>


<div class="bak">
    <div class="box-1">
        <a id="nulll" href="/" class="btn9 btn9-one" role="button"><span>Back Home</span></a>
    </div>
</div>

    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
@endsection