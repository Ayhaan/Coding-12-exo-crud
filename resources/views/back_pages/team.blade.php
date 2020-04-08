@extends('layouts.backoffice')

@section('content')
    <div>
        <h2 class="text-center">Your Team:</h2>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <a href="/team/create" class=" btn btn-success">Create</a>
    </div>

    <div class="container ">
        <div class="row bg-dark border rounded text-white ">
            <div class="col-1">
                <h3>Id</h3>
            </div>
            <div class="col-3">
                <h3>Img</h3>
            </div>
            <div class="col-3">
                <h3>Name</h3>
            </div>
             <div class="col-3">
                <h3>Description</h3>
            </div>
            <div class="col-2">
                <h3>Action</h3>
            </div>
        </div>
    </div>

    @foreach ($teams as $team)
    <div class="container">
        <div class="row">
            <div class="col-1 mt-2">
                ({{$team->id}})
            </div>
            <div class="col-3 mt-2">
                {{$team->img}}
            </div>
            <div class="col-3 mt-2">
                {{$team->name}}
            </div>
             <div class="col-3 mt-2">
                {{$team->span}}
            </div>
            <div class="col-2 mt-2">
                <a href="/team/{{$team->id}}/edit" class="btn btn-success">Edit</a>
                <a href="/team/{{$team->id}}/delete" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection