@extends('layouts.app')

@section('title', 'Thêm Giá')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Thêm Giá') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ranks.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Bậc Rank') }}</label>
                            <select id="name"  class="form-control @error('name') is-invalid @enderror" name="name" required>
                            <option value="Đồng">Đồng</option>
                            <option value="Bạc">Bạc</option>
                            <option value="Vàng">Vàng</option>
                            <option value="Bạch Kim">Bạch Kim</option>
                            <option value="Kim Cương">Kim Cương</option>
                            <option value="Tinh Anh">Tinh Anh</option>
                            <option value="Cao Thủ">Cao Thủ</option>
                            </select>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="price">{{ __('Giá') }}</label>
                          <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required>
                          
                          @error('price')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="old_price">{{ __('Giá cũ') }}</label>
                          <input id="old_price" type="number" class="form-control @error('old_price') is-invalid @enderror" name="old_price" value="{{ old('old_price') }}" required>
                          
                          @error('old_price')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="total_price">{{ __('Tổng') }}</label>
                          <input id="total_price" type="number" class="form-control @error('total_price') is-invalid @enderror" name="total_price" value="{{ old('total_price') }}" required>
                          
                          @error('total_price')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="estimated_completion_time">{{ __('Thời gian hoàn thành dự kiến') }}</label>
                          <input id="estimated_completion_time" type="number" class="form-control @error('estimated_completion_time') is-invalid @enderror" name="estimated_completion_time" value="{{ old('estimated_completion_time') }}" required>
                          
                          @error('estimated_completion_time')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="total_estimated_completion_time">{{ __('Tổng thời gian hoàn thành dự kiến') }}</label>
                          <input id="total_estimated_completion_time" type="number" class="form-control @error('total_estimated_completion_time') is-invalid @enderror" name="total_estimated_completion_time" value="{{ old('total_estimated_completion_time') }}" required>
                          
                          @error('total_estimated_completion_time')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="thumbnail">{{ __('Ảnh thumbnail') }}</label>
                          <input id="thumbnail" type="file" name="thumbnail" class="form-control">
                        </div>

                        @error('thumbnail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group row">
                          <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Tạo') }}</button>
                          </div>
                          <div class="col-md-6">
                              <a class="btn btn-secondary btn-lg btn-block" href="{{ route('ranks.index') }}" role="button">{{ __('Quay lại') }}</a>
                          </div>
                        </div>
                    </form>
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection