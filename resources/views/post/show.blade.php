@extends('layouts.app')

@section('title', $post->title)
@section('content')
    <a href="/post/{{ $post->id }}/edit" class="btn btn-info btn-sm">Edit</a>
    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
    {!! Form::close() !!}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <small>Written on {{ $post->created_at }}</small>
@endsection