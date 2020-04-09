@extends('layouts.backoffice')
@section('content')
<div>
    <h2 class="text-center">Testimonial:</h2>
</div>
<div class="d-flex justify-content-center mb-5">
    <a href="/testimonial/create" class=" btn btn-success">Create</a>
</div>

<div class="container ">
    <div class="row bg-dark border rounded text-white ">
        <div class="col-2">
            <h3>Name</h3>
        </div>
        <div class="col-2">
            <h3>Job</h3>
        </div>
        <div class="col-4">
            <h3>Comment</h3>
        </div>
         <div class="col-2">
            <h3>Img url</h3>
        </div>
        <div class="col-2">
            <h3>Action</h3>
        </div>
    </div>
</div>

@foreach ($testimonials as $testimonial)
<div class="container">
    <div class="row">
        <div class="col-2 mt-2">
            {{$testimonial->name}}
        </div>
        <div class="col-2 mt-2">
            {{$testimonial->span}}
        </div>
         <div class="col-4 mt-2">
            {{$testimonial->comment}}
         </div>
         <div class="col-2 mt-2">
            ({{$testimonial->img}})
        </div>
        <div class="col-2 mt-2">
            <a href="/testimonial/{{$testimonial->id}}/edit" class="btn btn-success">Edit</a>
            <a href="/testimonial/{{$testimonial->id}}/delete" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>
@endforeach
@endsection