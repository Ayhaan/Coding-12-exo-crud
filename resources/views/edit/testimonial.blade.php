@extends('layouts.forum')

@section('content')
<h1 class="text-center">Testimonial Edit:</h1>
<form  action="/testimonial/{{$testimonial->id}}/update"  method="POST">
    @csrf
    
    <div  class="form-group">
        <label  for="">Name</label>
    <input  type="text"  value='{{$testimonial->name}}'  class="form-control"  name="name"  id=""  aria-describedby="emailHelp"  placeholder="Name">
    </div>
    <div  class="form-group">
        <label  for="">Job</label>
        <input  type="text"  value='{{$testimonial->span}}'  class="form-control"  name="span"  id=""  aria-describedby="emailHelp"  placeholder="Job">
    </div>
    <div  class="form-group">
        <label  for="">Comment</label>
        <input  type="text"  value='{{$testimonial->comment}}'  class="form-control"  name="comment"  id=""  aria-describedby="emailHelp"  placeholder="Comment">
    </div>
    <div  class="form-group">
        <label  for="">Image Url</label>
        <input  type="text"  value='{{$testimonial->img}}'  class="form-control"  name="img"  id=""  aria-describedby="emailHelp"  placeholder="Img url">
    </div>
    <button  type="submit"  class="btn btn-primary">Upload</button>
</form>
@endsection