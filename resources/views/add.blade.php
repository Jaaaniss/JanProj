@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/add.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Size</h4>
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
                        <div class="form-group mb-3">
                            <label for="">Brand</label>
                            <select class="form-select" name="company" id="company">
                                <option value="vans">Vans</option>
                                <option value="adidas">Adidas</option>
                                <option value="nike">Nike</option>
                                <option value="nb">New Balance</option>
                            </select>
                            {{-- <input type="text" name="company" value="" class="form-control"> --}}
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Size</button>
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
