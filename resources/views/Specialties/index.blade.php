@extends('layout')
@section('title', 'Specialties')
@section('content')
    <h5 style="font-weight:bold">Specialities</h5>
    <table class="table  table-sm">
        <thead>
            <tr class="table-dark ">
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Specialtiess as $Specialty)
                <tr>
                    <td><strong class="text-success">{{ $Specialty['name'] }}</strong></td>
                    <td><button type="button" class="btn btn-dark btn-sm">view</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Specilities.create') }}" class="btn btn-dark border-1 border-success"><i class="fa fa-Plus"></i>
        Add Specialty</a>

    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="{{ url('laravel.png') }}">
        </div>
        <div class="col-md-3">

        </div>
    </div>
@endsection
