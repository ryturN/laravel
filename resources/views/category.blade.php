@extends('layout.main')
@section('container')
    <h1 class="mb-5">Post Category : {{$category}}</h1>

    @foreach ( $blogs as $blog )
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/blog/{{$blog->slug}}" class="text-decoration-none ">

            {{$blog->title}}</h2>
        </a>
        <h5>
            By : {{$blog -> user -> name}}
        </h5>
        <h6>
            <a href="/categories/{{$blog->category->slug}}"class="text-decoration-none " >
                {{$blog -> category -> name}}
            </a>
        </h6>
        <p>{{$blog->excerpt}}</p>
        <a href="/blog/{{$blog->slug}}" class="text-decoration-none">Read More</a>
    </article>
    @endforeach

@endsection
