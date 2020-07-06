@extends('layouts.app')

@section('title', 'Sửa Giá')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sửa Giá') }}</div>
                <div class="card-body">
                    {!! Form::open(['action' => ['RankController@update', $rank->id], 'method' => 'POST', 'files' => true]) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Bậc Rank') }}
                        {{ Form::select('name', ['Đồng' => 'Đồng', 'Bạc' => 'Bạc', 'Vàng' => 'Vàng'], '1', ['class' => 'form-control', 'placeholder' => 'Chọn mức Rank']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('price', 'Giá') }}
                        {{ Form::number('price', $rank->price, ['class' => 'form-control', 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('old_price', 'Giá cũ') }}
                        {{ Form::number('old_price', $rank->old_price, ['class' => 'form-control', 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('total_price', 'Tổng') }}
                        {{ Form::number('total_price', $rank->total_price, ['class' => 'form-control', 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('estimated_completion_time', 'Thời gian hoàn thành dự kiến') }}
                        {{ Form::number('estimated_completion_time', $rank->estimated_completion_time, ['class' => 'form-control', 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('total_estimated_completion_time', 'Tổng thời gian hoàn thành dự kiến') }}
                        {{ Form::number('total_estimated_completion_time', $rank->total_estimated_completion_time, ['class' => 'form-control', 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('thumbnail', 'Ảnh thumbnail') }}
                        {{ Form::file('thumbnail', ['class' => 'form-control']) }}
                    </div>
                    {{ Form::hidden('_method', 'PUT') }}
                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::submit('Lưu thay đổi', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('rank.index') }}" class="btn btn-secondary btn-lg btn-block"><i class="far fa-times-circle"></i> Hủy</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection