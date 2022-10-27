@extends('layout')
@section('title', 'PetType')
@section('content')
    <h5 style="font-weight:bold">Pet Type</h5>
    <table class="table  table-sm">
        <thead>
            <tr class="table-dark ">
                <th scope="col">PetType</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($PetTypes as $PetType)
                <tr>
                    <td><strong class="text-success">{{ $PetType['pet_type'] }}</strong></td>
                    <td><button type="button" class="btn btn-dark btn-sm">view</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('PetType.create') }}" class="btn btn-dark border-1 border-success"><i class="fa fa-Plus"></i> Add
        Type</a>

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
