@extends('layout')
@section('title', 'Owner')
@section('content')
    <h5 style="font-weight:bolder">Find Owners</h5>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lastname">
    </div>

    <a href="{{ route('OwnerInfo.index') }}" class="btn btn-dark border-1 border-success mt-3">Find Owner</a>

    <a href="{{ route('Owner.create') }}" class="btn btn-dark border-1 border-success mt-3">Add Owner</a>

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
