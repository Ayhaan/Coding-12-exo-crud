@extends('layouts.backoffice')

@section('content')
        <div>
        <h2 class="text-center">Portfolio:</h2>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <a href="/portfolio/create" class=" btn btn-success">Create</a>
    </div>

    <div class="container ">
        <div class="row bg-dark border rounded text-white ">
            <div class="col-1">
                <h3>Id</h3>
            </div>
            <div class="col-2">
                <h3>Titre</h3>
            </div>
            <div class="col-2">
                <h3>Comment</h3>
            </div>
             <div class="col-5">
                <h3>Image url</h3>
            </div>
            <div class="col-2">
                <h3>Action</h3>
            </div>
        </div>
    </div>

    @foreach ($portfolios as $portfolio)
    <div class="container">
        <div class="row">
            <div class="col-1 mt-2">
                ({{$portfolio->id}})
            </div>
            <div class="col-2 mt-2">
                {{$portfolio->titre}}
            </div>
            <div class="col-2 mt-2">
                {{$portfolio->span}}
            </div>
             <div class="col-5 mt-2">
                {{$portfolio->style_img}}
            </div>
            <div class="col-2 mt-2">
                <a href="/portfolio/{{$portfolio->id}}/edit" class="btn btn-success">Edit</a>
                <a href="/portfolio/{{$portfolio->id}}/delete" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection