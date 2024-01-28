

@extends('layout.main')
@section('container')

<h1 class="mb-5">Halaman Blog Post {{$title}}</h1>
@foreach ($blog as $blogs )
<article class="mb-5 border-bottom pb-5">
    <h1>
        <a href="/blog/{{$blogs->slug}}"class="text-decoration-none">
            {{$blogs->title}}
            </a>
    </h1>
    <h5>
        <a href="/users/blog/{{$blogs->user->username}}" class="text-decoration-none">
            By: {{ $blogs->user->name}}
        </a>

    </h5>
    <p> <a href="/categories/{{$blogs->category->slug}}" class="text-decoration-none">{{$blogs ->category->name}}</p></a>
    <h6>
        {{$blogs->excerpt}}
    </h6>
    <h6>

        {{$blogs->created_at}}
    </h6>
</article>

@endforeach

@endsection



