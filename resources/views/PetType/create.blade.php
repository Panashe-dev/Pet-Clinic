@extends('layout')
@section('title', 'PetType')
@section('content')
    <form class="form" method="Post" action="{{ route('PetType.store') }}">
        @csrf
        <div class="mb-3">
            <label for="PetType" class="form-label">Pet Type</label>
            <input type="text" class="form-control" id="petType" name="petType" placeholder="Enter pet type">
            @error('petType')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="{{ route('PetType.index') }}" class="btn btn-dark border-1 border-success"><i class="fa fa-level-up"></i>
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
