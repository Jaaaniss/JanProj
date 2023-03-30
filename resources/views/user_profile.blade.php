@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blade.css') }}">


    <div class="container">
        <div style="width: 100%;" class="lielaiscontainer">

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
                                <button onclick="showDiv()" id="readonly" type="button" class="btn btn-danger">Edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8">
                    <div id="cardinfo" class="card mb-4">
                        <div style="padding-top: 38px; padding-bottom: 38px;;"class="card-body">

                            <form action="{{ url('update/'.Auth::user()->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Username</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name='name' style="background: transparent;border: none;" readonly id="textmuted"
                                                class="text-muted mb-0"value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- <form action="{{ url('update/' . $userr->id) }}" method="POST">
                                        @csrf
                                        @method('PUT') --}}
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input name='email' style="background: transparent;border: none;" readonly id="textmuted"
                                                    class="text-muted mb-0"value="{{ Auth::user()->email }}">
                                                    {{-- <input  style="background: transparent;border: none;" type="text" name="name" value="{{ $userr->name }}" class="form-control"> --}}
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Password</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name='password' style="background: transparent;border: none;" readonly id="textmuted"
                                                class="text-muted mb-0"value="{{ Auth::user()->password }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Foot size (cm)</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name='foot_size_cm' style="background: transparent;border: none;" readonly id="textmuted"
                                                class="text-muted mb-0"value="{{ auth()->user()->foot_size_cm }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Role</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p id="textmuted" class="text-muted mb-0">User</p>
                                        </div>
                                        <div id="showdiv" class="col-sm-6" style="display:none;">
                                            <button style="max-width: 100px" type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>


    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="kolor" class="card">
                    <div id="editcard" class="card-header">
                        <h4 style="margin: 0;">Edit & Update Users</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('update/' . $userr->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ $userr->name }}" class="form-control">
                            </div>
                            <div style="display: flex;justify-content: space-between;" class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update User</button>
                                <a href="{{ url('manage_users') }}" class="btn btn-danger float-end">BACK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/edit_profile.js') }}"></script>
@endsection
