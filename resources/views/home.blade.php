@extends('layouts.app')
@section('content')
<div>
    @vite('resources/js/app.js')
    <h1>
        Home
    </h1>
    <img class="gato" src="{{Vite::asset('resources/img/gato.gif') }}" alt="">
</div>
@endsection