@extends('layouts.forum')
@section('content')
<h1 class="text-center">Team Edit:</h1>
<form  action="/team/{{$team->id}}/update"  method="POST">
    @csrf
    
    <div  class="form-group">
        <label  for="">Image url</label>
    <input  type="text"  value='{{$team->img}}'  class="form-control"  name="img"  id=""  aria-describedby="emailHelp"  placeholder="Image url">
    </div>
    <div  class="form-group">
        <label  for="">Your name</label>
        <input  type="text"  value='{{$team->name}}'  class="form-control"  name="name"  id=""  aria-describedby="emailHelp"  placeholder="Your name">
    </div>
    <div  class="form-group">
        <label  for="">Description</label>
        <input  type="text"  value='{{$team->span}}'  class="form-control"  name="description"  id=""  aria-describedby="emailHelp"  placeholder="description">
    </div>
    <button  type="submit"  class="btn btn-primary">Upload</button>
</form>
@endsection