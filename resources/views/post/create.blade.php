@extends('layouts.app')

@section('title', 'Thêm bài viết')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Thêm bài viết') }}</div>
                <div class="card-body">
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
                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::submit('Đăng', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('post.index') }}" class="btn btn-secondary btn-lg btn-block"><i class="far fa-times-circle"></i> Hủy</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection