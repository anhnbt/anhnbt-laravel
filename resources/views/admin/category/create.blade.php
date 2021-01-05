@extends('admin.layouts.app')

@section('title', 'Thêm chuyên mục')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Thêm chuyên mục') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Tên') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" aria-describedby="nameHelp" required autofocus>
                                <small id="nameHelp" class="form-text text-muted">Tên riêng sẽ hiển thị trên trang mạng của bạn.</small>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parent_id" class="col-sm-2 col-form-label">{{ __('Chuyên mục hiện tại') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select id="parent_id" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
                                    <option value="">Trống</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @if ($category->categories)
                                            @foreach ($category->categories as $childCategory)
                                                @include('category.child', ['childCategory' => $childCategory, 'parent' => '— '])
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>

                                @error('parent_id')
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
                                <small id="descHelp" class="form-text text-muted">Thông thường mô tả này không được sử dụng trong các giao diện, tuy nhiên có vài giao diện có thể hiển thị mô tả này.</small>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="thumbnail" class="col-sm-2 col-form-label">{{ __('Ảnh') }}</label>
                            <div class="col-sm-10">
                                <input id="thumbnail" type="file" class="form-control-file @error('thumbnail') is-invalid @enderror" name="thumbnail" aria-describedby="thumbHelp">
                                <small id="thumbHelp" class="form-text text-muted">The image size should be: 400 X 255</small>

                                @error('thumbnail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-primary mr-2">{{ __('Thêm chuyên mục') }}</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-link">{{ __('Hủy') }}</a>
                            </div>
                        </div>
                    </form>
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection