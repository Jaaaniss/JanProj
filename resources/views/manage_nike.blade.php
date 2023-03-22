@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<div style="padding-top: 50px" class="container">
    <div id="managee" class="row">
        <a href="{{ url('manage_adidas') }}" class="btn btn-primary float-end">Adidas</a>
        <a href="{{ url('manage_vans') }}" class="btn btn-primary float-end">Vans</a>
        <a href="{{ url('manage_nb') }}" class="btn btn-primary float-end">New balance</a>
        <div style="padding: 30px;" class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div id="headeris" class="card-header">
                    <div class="h2table">
                        <h2>Nike</h2>
                    </div>
                    <div class="poga-add">
                        <a href="{{ url('add') }}" class="btn btn-primary float-end">Add Size</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CM</th>
                                <th>EU</th>
                                <th>UK</th>
                                <th>US M</th>
                                <th>US W</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nike as $item2)
                            <tr>
                                <td>{{ $item2->id }}</td>
                                <td>{{ $item2->cm }}</td>
                                <td>{{ $item2->eu }}</td>
                                <td>{{ $item2->uk }}</td>
                                <td>{{ $item2->usm }}</td>
                                <td>{{ $item2->usw }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$item2->id.'/nike') }}" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-primary btn-sm">Edit size</a>
                                </td>
                                <td>
                                    <form action="{{ url('delete/'.$item2->id.'/nike') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/darkmode.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>

@endsection
