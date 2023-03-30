@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blade.css') }}">

    <img class="imagew" src="{{ asset('/image/wallpaper_jordan.jpg') }}" alt="" width="100%" height="899px">


    <div class="container">
        <div class="lielaiscontainer">

            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div id="cardpicture" class="card mb-4">
                        <div class="card-body text-center">
                            <img id="profilepic"
                                src="https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                            <p id="textmuted" class="text-muted mb-4">JSneaks website user</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-danger">Edit name</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8">
                    <div style="    margin-bottom: 0!important;" id="cardinfo" class="card mb-4">
                        <div style="padding-top: 38px; padding-bottom: 38px;;"class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Username</p>
                                </div>
                                <div class="col-sm-9">
                                    <input style="background: transparent;border: none;" readonly id="textmuted"
                                        class="text-muted mb-0"value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input style="background: transparent;border: none;" readonly id="textmuted"
                                        class="text-muted mb-0"value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <input style="background: transparent;border: none;" readonly id="textmuted"
                                        class="text-muted mb-0"value="{{ Auth::user()->password }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Foot size</p>
                                </div>
                                <div class="col-sm-9">
                                    <input style="background: transparent;border: none;" readonly id="textmuted"
                                        class="text-muted mb-0"value="{{ auth()->user()->foot_size_cm }} cm">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Role</p>
                                </div>
                                <div class="col-sm-9">
                                    <p id="textmuted" class="text-muted mb-0">User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>




    </div>


    {{-- <div class="bak">
        <div class="box-1">
            <a id="nulll" href="/" class="btn9 btn9-one" role="button"><span>Back Home</span></a>
        </div>
    </div> --}}


    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
