@extends('layouts.forum')
@section('content')
<h1 class="text-center">Portfolio Edit:</h1>
<form  action="/intro/store"  method="POST">
    @csrf
    

    <div  class="form-group">
        <label  for="">Image url</label>
        <input  type="text"   class="form-control"  name="img_path"  id=""  aria-describedby="emailHelp"  placeholder="Image url">
    </div>
    <button  type="submit"  class="btn btn-primary">Upload</button>
</form>
@endsection