
@extends('layout.main')
@section('container')
    <h1>
        Hai Nama saya {{ $name }}</h1>
        <p>

            Contact Me : {{ $email }}
        </p>
        <img src="img/{{$image}}" alt="waifu" class="img-thumbnail rounded-circle">
@endsection

