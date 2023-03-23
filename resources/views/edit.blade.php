@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit_size.css') }}">

<div class="container">
    <div class="row">
        <div style="display:flex; justify-content: center; padding: 50px;" class="col-md-12">
            <div id="kolor" class="card">
                <div class="card-header">
                    <h4>Edit & Update Sizes</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/'.$item->id.'/'.$company) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">CM</label>
                            <input type="text" name="CM" value="{{$item->cm}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">EU</label>
                            <input type="text" name="EU" value="{{$item->eu}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">UK</label>
                            <input type="text" name="UK" value="{{$item->uk}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">US M</label>
                            <input type="text" name="US_M" value="{{$item->usm}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">US W</label>
                            <input type="text" name="US_W" value="{{$item->usw}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="abibtn" style="width: 420px; display:flex;justify-content: space-between;">
                                <button type="submit" class="btn btn-primary">Update Sizes</button>
                                <a href="{{ url("manage_$company") }}" class="btn btn-danger float-end">BACK</a>
                            </div>
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
