@extends('layout')
@section('title','OwnerInfo')
@section('content')
<h5 style="font-weight:bold">Owners</h5>
<table class="table table-striped table-sm">
    <thead>
        <tr class="table-dark ">
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Telephone</th>
            <th scope="col">Pets</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($owners as $owner)
        <tr>
            <td>
                <a href="{{ route('OwnerInfo.show',['OwnerInfo'=>$owner['id']]) }}"><strong class="text-success"
                        style="text-decoration: underline">{{ $owner['firstname']
                        }} <br> {{ $owner['lastname']
                        }}</strong></a>
            </td>
            <td>{{ $owner['address'] }}</td>
            <td>{{ $owner['city'] }}</td>
            <td>{{ $owner['telephone'] }}</td>
          
            <td>
                @foreach ($owner->pets as $item)
                {{ $item->name}},
                @endforeach
            </td>
       

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