@extends('layouts.main')

@section('container')

    <h1 class="mb-5"> {{ $title }}  </h1>

@if ($posts->count())
    <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x250/?{{ $posts[0]->category->name }},coding,programing,bluesky" class="card-img-top" alt="https://source.unsplash.com/1200x250/?{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
    <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark ">{{ $posts[0]->title }}</a></h3>
    <p>
    <small class="text-muted">
        By <a href="/author/{{ $posts[0]->user->username }}" class="text-decoration-none"> {{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }}</a> {{$posts[0]->created_at->diffForHumans() }} </p>
    <p class="card-text">{{ $posts[0]->excerpt}}</p>

    <P><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
    </div>
@else
    <p class="text-center fs-4" > No Post Found . </p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-2">
            <div class="card">
                <img src="https://source.unsplash.com/240x240/?{{ $posts[0]->user->username }},coding, programming, bluesky" class="card-img-top" alt="...">
                <div class="card-body">
    <h5 class="card-title">{{ $posts[0]->title }}</h5>
    <p><small class="text-muted">By <a href="/author/{{ $posts[0]->user->username }}" class="text-decoration-none"> {{ $posts[0]->user->name }}</a> {{$posts[0]->created_at->diffForHumans() }} </p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


    @foreach ($posts->skip(1) as $post)

    <article class="mb-5 border-bottom pb-4">
    <h2> <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }} </a> </h2>
    
    <p> By <a href="/author/{{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a> </p>
    <p>{{ $post->excerpt }} </p>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more ...</a>
    </article>
@endforeach

<a href="/posts">POST</a>
@endsection