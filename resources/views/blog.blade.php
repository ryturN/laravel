

@extends('layout.main')
@section('container')

@foreach ($blog as $blogs )

<article class="mb-5">
    <h1>
        <a href="/blog/{{$blogs->slug}}">
            {{$blogs->title}}
            </a>
    </h1>
    <h5>
        <a href="/users/blog/{{$blogs->user->name}}">
            By: {{ $blogs->user->name}}
        </a>

    </h5>
    <p> {{$blogs ->category->name}}</p>
    <h6>
        {{$blogs->excerpt}}
    </h6>
    <h6>

        {{$blogs->published_at}}
    </h6>
</article>
@endforeach

@endsection



