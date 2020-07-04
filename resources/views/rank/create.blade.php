@extends('layouts.app')

@section('title', 'Thêm Giá')
@section('content')
    <h1>{{ __('Thêm Giá') }}</h1>
    {!! Form::open(['action' => 'RankController@store', 'method' => 'POST', 'files' => true]) !!}
    <div class="form-group">
        {{ Form::label('name', 'Bậc Rank') }}
        {{ Form::select('name', ['Đồng' => 'Đồng', 'Bạc' => 'Bạc', 'Vàng' => 'Vàng'], '1', ['class' => 'form-control', 'placeholder' => 'Chọn mức Rank']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Giá') }}
        {{ Form::number('price', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('old_price', 'Giá cũ') }}
        {{ Form::number('old_price', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('total_price', 'Tổng') }}
        {{ Form::number('total_price', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('estimated_completion_time', 'Thời gian hoàn thành dự kiến') }}
        {{ Form::number('estimated_completion_time', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('total_estimated_completion_time', 'Tổng thời gian hoàn thành dự kiến') }}
        {{ Form::number('total_estimated_completion_time', '', ['class' => 'form-control', 'placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('thumbnail', 'Ảnh thumbnail') }}
        {{ Form::file('thumbnail', ['class' => 'form-control']) }}
    </div>
    {{ Form::submit('Đăng', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection