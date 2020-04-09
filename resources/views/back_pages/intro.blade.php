@extends('layouts.backoffice')

@section('content')
    <div class="border mt-3 mb-3 container">
        <h2 class="text-center ">Modifer votre image d'intro:</h2>
        <div class="d-flex justify-content-center mb-5">
            {{-- @if ()
                
            @endif --}}
            <a href="/intro/create" class=" btn btn-success">Create</a>
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
