@extends('layout')
@section('title', 'Specialties')
@section('content')
    <form class="form" method="Post" action="{{ route('Specilities.store') }}">
        @csrf
        <div class="mb-3">
            <label for="Speciality" class="form-label">Specialties Name</label>
            <input type="text" class="form-control" id="Speciality" name="specialty" placeholder="Enter pet type">
            @error('specialty')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="{{ route('Specilities.index') }}" class="btn btn-dark border-1 border-success"><i class="fa fa-level-up"></i>
            Back</a>
        <button type="submit" class="btn btn-dark border-1 border-success"><i class="fa fa-plus"></i> Create</button>
    </form>
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
