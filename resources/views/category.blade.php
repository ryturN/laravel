@extends('layout.main')
@section('container')
    <h1 class="mb-5">Post Category : {{$category}}</h1>

    @foreach ( $blog as $blogs )
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/blog/{{$blogs->slug}}" class="text-decoration-none ">

            {{$blogs->title}}</h2>
        </a>
        <h5>
            By : {{$blogs -> user -> name}}
        </h5>
        <h6>
            <a href="/categories/{{$blogs->category->slug}}"class="text-decoration-none " >
                {{$blogs -> category -> name}}
            </a>
        </h6>
        <p>{{$blogs->excerpt}}</p>
        <a href="/blog/{{$blogs->slug}}" class="text-decoration-none">Read More</a>
    </article>
    @endforeach

@endsection
