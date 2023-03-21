@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<div class="container">
    <div class="row">

        <div style="padding: 30px" class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Vans
                        <a href="{{ url('/add') }}" class="btn btn-primary float-end">Add Size</a>
                    </h4>
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
                            @foreach ($vans as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->v_cm }}</td>
                                <td>{{ $item->v_eu }}</td>
                                <td>{{ $item->v_uk }}</td>
                                <td>{{ $item->v_usm }}</td>
                                <td>{{ $item->v_usw }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$item->id) }}" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-primary btn-sm">Edit size</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete/'.$item->id) }}" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete/'.$item->id) }}" method="POST">
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

        <div style="padding: 30px" class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Nike
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Size</a>
                    </h4>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nike as $item2)
                            <tr>
                                <td>{{ $item2->id }}</td>
                                <td>{{ $item2->n_cm }}</td>
                                <td>{{ $item2->n_eu }}</td>
                                <td>{{ $item2->n_uk }}</td>
                                <td>{{ $item2->n_usm }}</td>
                                <td>{{ $item2->n_usw }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$item2->id) }}" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-primary btn-sm">Edit size</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="padding: 30px" class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Adidas
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Size</a>
                    </h4>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adidas as $item3)
                            <tr>
                                <td>{{ $item3->id }}</td>
                                <td>{{ $item3->a_cm }}</td>
                                <td>{{ $item3->a_eu }}</td>
                                <td>{{ $item3->a_uk }}</td>
                                <td>{{ $item3->a_usm }}</td>
                                <td>{{ $item3->a_usw }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$item3->id) }}" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-primary btn-sm">Edit size</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="padding: 30px" class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>New Balance
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Size</a>
                    </h4>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newbalance as $item4)
                            <tr>
                                <td>{{ $item4->id }}</td>
                                <td>{{ $item4->nb_cm }}</td>
                                <td>{{ $item4->nb_eu }}</td>
                                <td>{{ $item4->nb_uk }}</td>
                                <td>{{ $item4->nb_usm }}</td>
                                <td>{{ $item4->nb_usw }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$item4->id) }}" style="width:fit-content; padding-left:20px; padding-right:20px;" class="btn btn-primary btn-sm">Edit size</a>
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
