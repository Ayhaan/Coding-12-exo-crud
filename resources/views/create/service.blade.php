@extends('layouts.forum')

@section('content')
<h1 class="text-center">Create new Service:</h1>
<form  action="/service/store"  method="POST">
    @csrf
    
    <div  class="form-group">
        <label  for="">ClassName logo</label>
    <input  type="text"   class="form-control"  name="logo"  id=""  aria-describedby="emailHelp"  placeholder="ClassName">
    </div>
    <div  class="form-group">
        <label  for="">Description</label>
        <input  type="text"    class="form-control"  name="titre"  id=""  aria-describedby="emailHelp"  placeholder="Titre">
    </div>
    <div  class="form-group">
        <label  for="">Comment</label>
        <input  type="text"    class="form-control"  name="span"  id=""  aria-describedby="emailHelp"  placeholder="Comment">
    </div>
    <button  type="submit"  class="btn btn-primary">Upload</button>
</form>
@endsection