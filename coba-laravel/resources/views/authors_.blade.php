@extends('layouts.main')

@section('container')

<h1 class="mb-5"> Post Authors </h1>

@foreach ($user as $user)
    <ul>
        <li>
        <h2> <a href="/author/{{ $user->username }}" class="text-decoration-none">{{ $author->name  }} </a> </h2>

    </li>
        </ul>
@endforeach

<a href="/posts">Kembali ke Halaman Post</a>
@endsection