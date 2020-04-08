@extends('layouts.forum')
@section('content')
<h1 class="text-center">Portfolio Edit:</h1>
<form  action="/portfolio/{{$portfolio->id}}/update"  method="POST">
    @csrf
    
    <div  class="form-group">
        <label  for="">Titre</label>
    <input  type="text"  value='{{$portfolio->titre}}'  class="form-control"  name="titre"  id=""  aria-describedby="emailHelp"  placeholder="titre">
    </div>
    <div  class="form-group">
        <label  for="">Description</label>
        <input  type="text"  value='{{$portfolio->span}}'  class="form-control"  name="span"  id=""  aria-describedby="emailHelp"  placeholder="Description">
    </div>
    <div  class="form-group">
        <label  for="">Image url</label>
        <input  type="text"  value='{{$portfolio->style_img}}'  class="form-control"  name="style_img"  id=""  aria-describedby="emailHelp"  placeholder="Comment">
    </div>
    <button  type="submit"  class="btn btn-primary">Upload</button>
</form>
@endsection