@extends('layouts.app')

@section('title', 'Thêm bài viết')
@section('content')
    <h1>Thêm bài viết</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Tiêu đề') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Thêm tiêu đề']) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Mô tả') }}
        {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Nội dung') }}
        {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    {{ Form::submit('Đăng', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection