
@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/select.css') }}">

<img class="imagew" src="{{ asset('/image/wallpaper.jpg') }}" alt="" width="100%" height="899px">


    <div class="lielaisdiv">
        <h1>Select your size here to save it for future</h1>
    </div>


<div class="bak">
    <div class="box-1">
        <a id="nulll" href="/" class="btn2 btn-one" role="button"><span>Back Home</span></a>
    </div>
</div>

    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/password.js') }}"></script>

@endsection