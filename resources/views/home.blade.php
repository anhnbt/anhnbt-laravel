@extends('web.layout')

@section('content')
<div class="container">
    <p>Chào mừng đến với blog của <span class="tag">Tuấn Anh</span></p>
    <div class="row">
        <div class="eight columns">
            @if(count($posts) > 0)
                @foreach ($posts as $post)
                <article class="card u-cf mb-1">
                    <a href="{{ route('pages.show', $post->slug) }}">
                    @if ($post->thumbnail != '')
                        <img src="{{ url('storage/thumbnails/' . $post->thumbnail) }}" class="u-full-width" alt="{{ $post->title }}">
                    @else
                        <img src="{{ url('images/150.png') }}" class="u-full-width" alt="{{ $post->title }}">
                    @endif
                    </a>
                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <p class="desc">Giới thiệu Quyền riêng tư của bạn rất quan trọng đối với website này và tớ cam kết bảo vệ nó. Ch& […]</p>
                        <a class="button" href="{{ route('pages.show', $post->slug) }}">Xem bài viết »</a>
                    </div>
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
