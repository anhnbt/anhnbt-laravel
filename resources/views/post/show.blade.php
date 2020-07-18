@extends('layouts.app')

@section('title', $post->title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('includes.breadcrumbs')
            <div class="card text-center">
                <div class="position-relative">
                    <span class="badge badge-dark position-absolute p-2" style="bottom: 10px; left: 10px;"><i class="fas fa-eye"></i> {{ $post->views }}</span>
                    @if ($post->thumbnail != '')
                        <img src="{{ url('storage/thumbnails/' . $post->thumbnail) }}" width="50" class="card-img-top" alt="{{ $post->title }}">
                    @else
                        <img src="{{ url('images/noimage.jpg') }}" width="50" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title display-4 text-primary">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->user->name ?? '' }}</p>
                    <p class="card-text">{{ $post->content }}</p>
                    @auth
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-lg btn-block" role="button"><i class="far fa-edit"></i> {{ __('Edit') }}</a>
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endauth
                </div>
                <div class="card-footer text-muted">
                    <small>{{ __('Last updated') }} {{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</small>
                </div>
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection