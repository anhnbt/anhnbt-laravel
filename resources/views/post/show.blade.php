@extends('layouts.app')

@section('title', $post->title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title display-4 text-primary">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->user->name ?? '' }}</p>
                    <p class="card-text">{{ $post->body }}</p>
                    @auth
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary btn-lg btn-block"><i class="far fa-edit"></i> Edit</a>
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
                <div class="card-footer">
                    <small class="text-muted">Last updated {{ $post->updated_at }}</small>
                </div>
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection