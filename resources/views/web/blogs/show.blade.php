@extends('web.layout')

@section('title', $post->title)
@section('content')
<div class="container">
    <div class="row">
        <div class="eight columns">
            @include('includes.breadcrumbs')
            <article class="post-content">
                <header class="mb-1">
                    <h1 class="headline" href="{{ route('pages.show', $post->slug) }}">{{ $post->title }}</h1>
                    <div class="published"><span class="author">{{ $post->user->name ?? '' }}</span> · <time>{{ $post->created_at }}</time></div>
                </header>
                {!! $post->content !!}
                </div>
            </article>
        </div><!-- /.eight columns -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection