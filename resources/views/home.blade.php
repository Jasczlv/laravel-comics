@extends('layouts.app')
@section('content')
<div>
    @vite('resources/js/app.js')

    <h1>
        Home
    </h1>

    <div class="container-fluid d-flex align-center justify-content-center">
        
        @if(!empty($data) && is_array($data))
        <div class="comics-container">
            @foreach ($data as $comic)
                <div class="card">
                    <img class="img-card-comic" src="{{$comic['thumb']}}" alt="">
                    <div class="px-3">
                        <h2 class="align-self-center text-center mt-2">{{$comic['title']}}</h2>
                        <p><b>Series: </b>{{$comic['series']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        @endif

    </div>

    <img class="gato" src="{{Vite::asset('resources/img/gato.gif') }}" alt="">
</div>
@endsection