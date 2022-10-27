@extends('layout')
@section('title', 'Specialties')
@section('content')
    <div class="row">
        <div class="Col-md-1">

        </div>
        <div class="Col-md-10">


            <form class="form" method="Post" action="{{ route('Veterinarian.store') }}">
                @csrf
                <div class="">

                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="firtname" class="form-label">Firts Name</label>
                            <input type="text" class="form-control form-control-sm" id="firtname" name="firstname"
                        >
                            @error('firstname')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname"
                                >
                            @error('lastname')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" class="form-control form-control-sm" id="email" name="email" >
                            @error('email')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="cell" class="form-label">Cell</label>
                            <input type="text" class="form-control form-control-sm" id="cell" name="cell" >
                            @error('cell')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="Speciality" class="form-label">Specialty</label>
                            <select class="form-select form-control-sm" aria-label="Default select example" id="Speciality"
                                name="specialty">
                                <option selected>choose</option>
                                @foreach ($specialities as $specialty)
                                    <option>{{ $specialty['name'] }}</option>
                                @endforeach
                            </select>
                            @error('specialty')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>
                <a href="{{ route('Veterinarian.index') }}" class="btn btn-dark mt-4 border-1 border-success"><i
                        class="fa fa-level-up"></i> Back</a>
                <button type="submit" class="btn btn-dark border-1 mt-4 border-success"><i class="fa fa-plus"></i>
                    Create</button>
            </form>
        </div>
        <div class="Col-md-1">

        </div>
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
        <nav class="navbar navbar-dark bg-dark mt-4">
            <div class="container-fluid">
                <span class="navbar-text">
                    laravel Pet Clinic @2022 dev Panashe O`brien.
                </span>
            </div>
        </nav>
    </div>

@endsection
