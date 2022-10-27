@extends('layout')
@section('title','Visits')
@section('content')
<h5 style="font-weight:bold">New Visit</h5>
<p style="font-weight:bold; margin-top:2px">Pet</p>
<table class="table table-striped  table-sm">
    <thead>
        <tr class="table-dark ">
            <th scope="col">Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Type</th>
            <th scope="col">Owner</th>
        </tr>
    </thead>
    <tr>

        <td>{{ $Pets['name'] }}</td>
        <td>{{ $Pets['birth_date'] }}</td>
        <td>{{ $Pets['petType'] }}</td>
        <td>{{ $owners['firstname'] }}</td>
    </tr>
    </tbody>
</table>
<form class="form" method="POST" action="{{ route('Visit.store') }}">
    @csrf
    <input type="text" hidden class="form-control form-control-sm" id="id" name="id" value="{{ $Pets['id'] }}">
    <div class="input-sm">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control form-control-sm " id="date" name="date">
        @error('date')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="input-sm">
        <label for="Description" class="form-label">Description</label>
        <input type="text" class="form-control form-control-sm " id="Description" name="Description">
        @error('Description')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark border-1 border-success mt-3">Add Pet</button>
</form>

<p style="font-weight:bold;margin-top:30px">Previous Visits</p>
<table class="table table-striped table-sm">
   
        <tr class="table-light">
            <th scope="col">Date</th>
            <th scope="col">Description</th>

        </tr>
       
           @foreach ($Pets->Visits as $visit)
        <tr>
            @if (isset($Pets))
            <td>{{ $visit['visit_date'] }}</td>
            <td>{{ $visit['description'] }}</td>
              @else
              <td>
            
            </td>
            <td>
                <strong>"No Visits Found For {{ $Pets['name'] }} "</strong>
            </td>
            @endif
        </tr>
        @endforeach    
    </tbody>
</table>


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