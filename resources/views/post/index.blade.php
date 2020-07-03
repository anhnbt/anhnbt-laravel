@extends('layouts.app')

@section('title', 'Bài viết')
@section('content')
    <h1>Bài viết</h1>
    @if (count($posts) > 0)
    <div class="card my-2">
        <ul class="list-group list-group-flush">
        @foreach ($posts as $post)
            <li class="list-group-item">
                <h3><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>Written on {{ $post->created_at }}</small>
            </li>
        @endforeach
        </ul>
    </div>
    {{ $posts->links() }}
    @else
    <div class="alert alert-info" role="alert">No data found.</div>
    @endif
@endsection