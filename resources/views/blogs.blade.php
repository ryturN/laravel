

@extends('layout.main')

@section('container')
<article>
    <h1>{{$new_post->title}}</h1>
    <h5>Author : {{$new_post->user->name}} </p>
    <h5>{{$new_post->author}}</h5>
    {!!$new_post->body!!}
    <div class="container">

        <div class="border border-primary d-inline-flex p-0 pr-5">

            <a href="/categories/{{$new_post->category->slug}}">
                <p >Category : {{$new_post->category->name}}</p>
            </a>
        </div>
    </div>
</article>

<a href="/blog">back</a>
@endsection
