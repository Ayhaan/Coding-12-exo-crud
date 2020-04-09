@extends('layouts.backoffice')

@section('content')
<div>
    <h2 class="text-center">Your message:</h2>
</div>


<div class="container ">
    <div class="row bg-dark border rounded text-white ">
        <div class="col-2">
            <h3>Name</h3>
        </div>
        <div class="col-2">
            <h3>Email</h3>
        </div>
        <div class="col-2">
            <h3>Subject</h3>
        </div>
         <div class="col-4">
            <h3>Comment</h3>
        </div>
        <div class="col-2">
            <h3>Action</h3>
        </div>
    </div>
</div>

@foreach ($contacts as $contact)
<div class="container">
    <div class="row">
        <div class="col-2 mt-2">
            {{$contact->name}}
        </div>
        <div class="col-2 mt-2">
            {{$contact->email}}
        </div>
        <div class="col-2 mt-2">
            {{$contact->subject}}
        </div>
         <div class="col-4 mt-2">
            {{$contact->message}}
        </div>
        <div class="col-2 mt-2">
            <a href="/contact/{{$contact->id}}/delete" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>
@endforeach
@endsection