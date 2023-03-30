@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blade.css') }}">


        <div style="display: flex;align-items: center;justify-content: center;height: 100%;" class="container">

            <div class="lielaiscontainer">

                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a id="a" href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enter size</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-8">
                        <div id="cardpicture" class="card mb-4">
                            <div style="display: flex;flex-direction: column;justify-content: center;" class="card-body text-center">
                                <h3>
                                    <center>
                                        Enter your foot size to 'Save' it for future or click 'Next' to manually select it
                                    </center>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div id="cardinfo" class="card mb-4">
                            <div style="padding-top: 38px; padding-bottom: 38px;;"class="card-body">
                                <div style="justify-content:center" class="row">
                                    <form class="formss" action="/select" method="post">
                                        @csrf
                                        <input id="sizeinput" max="1000" type="number" name="foot_size_cm" class="form-control"
                                            placeholder="Enter a number" aria-label="Cm" aria-describedby="button-addon2">
                                        <div style="display: flex;flex-direction: column;padding-bottom: 20p;" class="butooni">
                                            <div style="padding-bottom: 10px; padding-top: 10px;" class="viensbuttons">
                                                <button style="width: 100%!important;" class="btn btn-dark" type="submit" id="submitbutton">Save</button>
                                            </div>
                                            <a id="nulll" style="width: 100%!important;" href="/next" class="btn btn-dark" role="button"><span>Next</span></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
@endsection
