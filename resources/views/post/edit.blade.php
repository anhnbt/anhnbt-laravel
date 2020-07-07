@extends('layouts.app')

@section('title', 'Chỉnh sửa bài viết')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Chỉnh sửa bài viết') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="title">{{ __('Tiêu đề') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Mô tả')}} </label>
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $post->description }}" required>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">{{ __('Nội dung') }}</label>
                            <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" cols="30" rows="10" required>{{ $post->body }}</textarea>

                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Lưu thay đổi') }}</button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('posts.index') }}" class="btn btn-link btn-lg btn-block">{{ __('Quay lại') }}</a>
                            </div>
                        </div>
                    </form>
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection