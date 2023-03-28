@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">



    <img class="imagew" src="{{ asset('/image/wallpaper_jordan.jpg') }}" alt="" width="100%" height="899px">

    <div class="container">
        <div style="display: flex;justify-content: center;" class="col-lg-10 col-xl-9 mx-auto">
            <div id="shadoww" class="card flex-row my-5 border-0 rounded-3 overflow-hidden">
                <div id="carder" class="card-body p-4 p-sm-5">
                    <div class="input-group mb-3">
                        <div class="virsra">
                            <h2 style="text-align: center;">
                                Your saved foot size is {{ auth()->user()->foot_size_cm }}cm
                            </h2>
                            <h2 style="padding-top: 30px; padding-bottom: 20px">
                                <center>You can enter your new size below to 'Save' it or click 'Next' for sizing</center>
                            </h2>
                        </div>
                        <form class="formss" action="/select" method="post">
                            @csrf
                            <input id="sizeinput" max="1000" type="number" name="foot_size_cm" class="form-control"
                                placeholder="Enter a number" aria-label="Cm" aria-describedby="button-addon2">
                            <div class="butooni">
                                <button class="btn10 btn10-one" type="submit" id="submitbutton">Save</button>
                                <a id="nulll" href="/next" class="btn10 btn10-one" role="button"><span>Next</span></a>
                            </div>
                        </form>
                    </div>
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
