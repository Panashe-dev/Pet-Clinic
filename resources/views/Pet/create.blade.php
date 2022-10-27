@extends('layout')
@section('content')
   <h5 style="font-weight:bold">New Pet</h5>
   <form class="form" method="POST" action="{{ route('Pet.store') }}">
        @csrf
        <input type="text" hidden class="form-control form-control-sm" id="id" name="id"
            value="{{ $owners->id }}">
        <div class="mb-3">
            <label for="firstname" class="form-label">Owner Name:</label>
            <input type="text" disabled class="form-control form-control-sm" id="firstname"  name="firstname" value="{{ $owners->firstname }}">
        </div>
        <div class="">
            <label for="Petname" class="form-label">Pet Name:</label>
            <input type="text"  class="form-control form-control-sm" id="Petname" name="petname">
            @error('petname')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb input-sm">
            <label for="birth" class="form-label">Birth:</label>
            <input type="date" class="form-control form-control-sm " id="birth" name="birth">
            @error('birth')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-1">
            <label for="pet-type" class="form-label">Pet type</label>
            <select class="form-select form-control-sm"  id="pet-type" name="petType">
                @foreach ($PetTypes as $PetType)
                <option>{{ $PetType['pet_type'] }}</option>
                @endforeach
            </select>

            @error('petType')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark border-1 border-success mt-3">Add Pet</button>
   </form>
@endsection