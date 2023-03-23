@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/manage.css') }}">

<div style="padding-top: 50px" class="container">
    <div id="managee" class="row">
        {{-- <a href="{{ url('manage_vans') }}" class="btn btn-primary float-end">Vans</a>
        <a href="{{ url('manage_nike') }}" class="btn btn-primary float-end">Nike</a>
        <a href="{{ url('manage_nb') }}" class="btn btn-primary float-end">New balance</a> --}}
        <div style="padding: 30px;" class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div id = "kaards" class="card">
                <div id="headeris" class="card-header">
                    <div class="h2table">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Adidas
                            </button>
                            <div style="position: absolute; will-change: transform; top: 0px; left: 0px; width: 250px; transform: translate3d(0px, 50px, 0px);" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ url('manage_vans') }}">Vans</a>
                              <a class="dropdown-item" href="{{ url('manage_nike') }}">Nike</a>
                              <a class="dropdown-item" href="{{ url('manage_nb') }}">New balance</a>
                            </div>
                          </div>
                    </div>
                    <div class="poga-add">
                        <a href="{{ url('add') }}" class="btn btn-primary float-end">Add Size</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>CM</th>
                                <th>EU</th>
                                <th>UK</th>
                                <th>US M</th>
                                <th>US W</th>
                                <th style="width: 250px !important;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-darkk">
                            @foreach ($adidas as $item3)
                            <tr>
                                <td>{{ $item3->cm }}</td>
                                <td>{{ $item3->eu }}</td>
                                <td>{{ $item3->uk }}</td>
                                <td>{{ $item3->usm }}</td>
                                <td>{{ $item3->usw }}</td>
                                <td>
                                    <div class="stails">
                                        <a href="{{ url('edit/'.$item3->id.'/adidas') }}" style="width:100px; padding-left:20px; padding-right:20px;" class="btn btn-primary btn-sm">Edit size</a>
                                        <form action="{{ url('delete/'.$item3->id.'/adidas') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="width:100px; padding-left:20px; padding-right:20px;" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
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
