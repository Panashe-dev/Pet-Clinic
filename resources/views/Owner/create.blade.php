@extends('layout')
@section('title', 'Owner')
@section('content')
    <h5 style="font-weight:bolder">Find Owners</h5>
    <form class="form" method="POST" action="{{ route('Owner.store') }}">
        @csrf
        <div class="">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" class="form-control form-control-sm" id="firstname" name="firstname">
            @error('firstname')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname">

            @error('lastname')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control form-control-sm" id="address" name="address">

            @error('address')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="">
            <label for="city" class="form-label">City:</label>
            <input type="text" class="form-control form-control-sm" id="city" name="city">

            @error('city')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="">
            <label for="telephone" class="form-label">Telephone:</label>
            <input type="text" class="form-control form-control-sm" id="telephone" name="telephone">

            @error('telephone')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark border-1 border-success mt-3">Add Owner</button>
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
