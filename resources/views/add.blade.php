@extends('layouts.app')

@section('content')

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
                            <button type="submit" class="btn btn-primary">Save Size</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
