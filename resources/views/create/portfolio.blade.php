@extends('layouts.forum')
@section('content')
<h1 class="text-center">Portfolio Edit:</h1>
<form  action="/portfolio/store"  method="POST">
    @csrf
    
    <div  class="form-group">
        <label  for="">Titre</label>
    <input  type="text"    class="form-control"  name="titre"  id=""  aria-describedby="emailHelp"  placeholder="titre">
    </div>
    <div  class="form-group">
        <label  for="">Description</label>
        <input  type="text"    class="form-control"  name="span"  id=""  aria-describedby="emailHelp"  placeholder="Description">
    </div>
    <div  class="form-group">
        <label  for="">Image url</label>
        <input  type="text"   class="form-control"  name="style_img"  id=""  aria-describedby="emailHelp"  placeholder="Image url">
    </div>
    <button  type="submit"  class="btn btn-primary">Upload</button>
</form>
@endsection