@extends('layout')
@section('title', 'Veterianrian')
@section('content')
<h5 style="font-weight:bold">Veterianrians</h5>
    <table class="table  table-sm">
        <thead>
            <tr class="table-dark ">
                <th scope="col">Vets name</th>
                <th scope="col">Specialities</th>
            </tr>
        </thead>
        @foreach ($Veterinarians as $Veterinarian)
            
            <tr>
                <td><strong class="text-success">{{ $Veterinarian['first_name'] }}
                        {{ $Veterinarian['last_name'] }}</strong></td>
                <td>{{ $Veterinarian['Specialities'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('Veterinarian.create') }}" class="btn btn-dark border-1 border-success"><i class="fa fa-Plus"></i>
        Add Veterinarian</a>

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
