@extends('layouts.backoffice')

@section('content')
    <div class="border mt-3 mb-3 container">
        <h2 class="text-center ">Modifer votre image d'intro:</h2>
        <div class="d-flex justify-content-center mb-5">

           @if (isset($intros[0]))
                <h4 class="font-weight-bold" >Vous pouvez Update une seul fois.  </h4 >
            @else
                <a href="/intro/create" class=" btn btn-success">Create</a>
            @endif
        </div>

        @foreach ($intros as $intro)
            <div class="row d-flex justify-content-center mb-3">
                <img src={{$intro->img_path}} alt="" class="col-8">
                <div class="col-4 ">
                    <a href="/intro/{{$intro->id}}/delete" class="btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
