@extends('layouts.home')

@section('title')
    Posts Index
@endsection

@section('content')
    <div class="text-primary">
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
