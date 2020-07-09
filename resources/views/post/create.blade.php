@extends('layouts.app')

@section('title', 'Thêm bài viết')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Thêm bài viết') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">{{ __('Tiêu đề') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" aria-describedby="titleHelp" required autofocus>
                                <small id="titleHelp" class="form-text text-muted">This is what will appear in the first line when this post shows up in the search results.</small>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-sm-2 col-form-label">{{ __('Chuyên mục') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">{{ __('Mô tả') }}</label>
                            <div class="col-sm-10">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" aria-describedby="descHelp">
                                <small id="descHelp" class="form-text text-muted">This is what will appear as the description when this post shows up in the search results.</small>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-sm-2 col-form-label">{{ __('Nội dung') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" cols="30" rows="10" placeholder="Write something..." required>{{ old('content') }}</textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_active" class="col-sm-2 col-form-label">{{ __('Hiển thị') }}</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input id="is_active" type="checkbox" class="form-check-input" name="is_active" value="1" checked>
                                    Hiển thị 
                                  </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-primary mr-2">{{ __('Đăng') }}</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary">{{ __('Quay lại') }}</a>
                            </div>
                        </div>
                    </form>
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection