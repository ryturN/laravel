@extends('layout.main')
@section('container')
    <h1>Post Category</h1>

    @foreach ( $category as $categories )
    <ul>
        <li>
            <h2><a href="/categories/{{$categories->slug}}">
                {{$categories->slug}}</h2>
            </a>
        </li>
    </ul>
    @endforeach

@endsection
