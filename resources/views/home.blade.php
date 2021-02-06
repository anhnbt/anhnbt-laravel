@extends('web.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="eight columns">
            @if(count($posts) > 0)
                @foreach ($posts as $post)
                <article class="u-cf mb-1">
                    <a href="{{ route('pages.show', $post->slug) }}" class="u-pull-left thumbnail">
                    @if ($post->thumbnail != '')
                        <img src="{{ url('storage/thumbnails/' . $post->thumbnail) }}" width="50" class="" alt="{{ $post->title }}">
                    @else
                        <img src="{{ url('images/150.png') }}" width="50" class="" alt="{{ $post->title }}">
                    @endif
                    </a>
                    <a class="headline" href="{{ route('pages.show', $post->slug) }}">{{ $post->title }}</a>
                    <p class="desc">Giới thiệu Quyền riêng tư của bạn rất quan trọng đối với website này và tớ cam kết bảo vệ nó. Ch& […]</p>
                </article>
                @endforeach
            @else
                <div class="alert alert-info" role="alert">No data found.</div>
            @endif
        </div><!-- /.eight columns -->
        <aside class="four columns">
            hello what your name
        </aside>
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection
