@extends('admin.layouts.app')

@section('title', $post->title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('includes.breadcrumbs')
            <div class="card">
                <div class="position-relative">
                    <span class="badge badge-dark position-absolute p-2" style="bottom: 10px; left: 10px;">{{ $post->views }} views</span>
                    @if ($post->thumbnail != '')
                        <img src="{{ url('storage/thumbnails/' . $post->thumbnail) }}" width="50" class="card-img-top" alt="{{ $post->title }}">
                    @else
                        <img src="{{ url('images/noimage.jpg') }}" width="50" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                </div>
                <div class="card-body">
                    <h1 class="card-title display-4 text-primary">{{ $post->title }}</h1>
                    <p class="card-text">{{ $post->user->name ?? '' }}</p>
                    {!! $post->content !!}
                </div>
                <div class="card-footer text-muted">
                    <small>{{ __('Last updated') }} {{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</small>
                </div>
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection