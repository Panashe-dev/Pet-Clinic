@extends('layout')
@section('title','Pet')
@section('content')
<h5 style="font-weight:bold">Owner Information</h5>
<table class="table table-striped table-sm ">
    <tr>
        <th scope="col"> Name</th>
        <td><strong>{{ $owners->firstname }}</strong></td>
    </tr>

    <tr>
        <th scope="col">Address</th>
        <td>{{ $owners->address }}</td>
    </tr>

    <tr>
        <th scope="col">City</th>
        <td>{{ $owners->city }}</td>
    </tr>

    <tr>
        <th scope="col">Telephone</th>
        <td>{{ $owners->telephone }}</td>
    </tr>

    </tbody>
</table>

<a href="{{ route('Veterinarian.create') }}" class="btn btn-dark border-1 border-success">
    Edit Owner</a>
<a href="{{ route('Pet.show',['Pet'=>$owners['id']]) }}" class="btn btn-dark border-1 border-success">
    Add New Pet </a>

<h5 style="font-weight:bold;margin-top:60px">Pets and Visits</h5>
<table class="table table-striped table-sm">

    @foreach ($owners->pets as $item)

    <tr>
        <td valign="top">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $item->name }}</dd>
                <dt>Birth Date</dt>
                <dd>{{ $item->birth_date }}</dd>
                <dt>Type</dt>
                <dd>{{ $item->petType }}</dd>
            </dl>
        </td>
        <td valign="top">
            <table class="table-condensed">
                <thead>
                    <tr>
                        <th>Visit Date</th>
                        <th>Description</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($item->visits as $visit)
                    <tr>
                        <td>
                            <p>{{ $visit['visit_date'] }}</p>
                        </td>
                        <td>
                            <p>{{ $visit['description'] }}</p>
                        </td>
                    <tr>
                        @endforeach
                        <td>
                            <a href=""><strong class="text-success" style="text-decoration: underline">Edit
                                    Pet</a></strong>
                        </td>
                        <td>


                            <strong class="text-success" style="text-decoration: underline"><a
                                    href="{{ route('Visit.show',['Visit'=>$item->id] )}}">Add
                                    Visit</a></strong>

                        </td>


                    </tr>
                </tbody>
            </table>
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