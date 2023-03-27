@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit_size.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/add.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



<div class="container">
    <div class="row ">
        <div style="padding-top: 30px;" class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div id="kolor" class="card">
                <div id="addcard" class="card-header">
                    <h4 style="margin: 0; padding-bottom: 5px; padding-top: 5px;" >Add Size</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">CM</label>
                            <input type="text" name="CM" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">EU</label>
                            <input type="text" name="EU" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">UK</label>
                            <input type="text" name="UK" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">US M</label>
                            <input type="text" name="US_M" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">US W</label>
                            <input type="text" name="US_W" class="form-control">
                        </div>
                        <div style="padding-bottom: 10px;" class="form-group mb-3">
                            <label for="">Brand</label>
                            <select class="form-select" name="company" id="company">
                                <option value="vans">Vans</option>
                                <option value="adidas">Adidas</option>
                                <option value="nike">Nike</option>
                                <option value="nb">New Balance</option>
                            </select>
                            {{-- <input type="text" name="company" value="" class="form-control"> --}}
                        </div>
                        <div style="display: flex; justify-content: space-between;" class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Size</button>
                            <a href="{{ url("manage_vans") }}" class="btn btn-danger float-end">BACK</a>
                            {{-- <a href="{{ url("manage_$company") }}" class="btn btn-danger float-end">BACK</a> --}}
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
