@extends('layouts.app')

@section('title', 'Chỉnh sửa bài viết')
@section('content')
    <h1>Chỉnh sửa bài viết</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Tiêu đề') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Thêm tiêu đề']) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Mô tả') }}
        {{ Form::text('description', $post->description, ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Nội dung') }}
        {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => '']) }}
    </div>

    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Lưu thay đổi', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection