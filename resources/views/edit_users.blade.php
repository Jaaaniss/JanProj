@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit_size.css') }}">

<div class="container">
    <div class="row">
        <div style="padding-top: 100px" class="col-md-12">
            <div id="kolor" class="card">
                <div id="editcard" class="card-header">
                    <h4 style="margin: 0;" >Edit & Update Users</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/'.$userr->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$userr->name}}" class="form-control">
                        </div>
                        <div style="display: flex;justify-content: space-between;" class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update User</button>
                            <a href="{{ url("manage_users") }}" class="btn btn-danger float-end">BACK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/darkmode.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>

@endsection