@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <h4><strong>Welcome</strong></h4>
            <img class="img-responsive" src="{{ url('pets.png') }}">
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>

        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="{{ url('laravel.png') }}">
        </div>
    </div>
@endsection
