@extends('layouts.app')

@section('title', 'Sửa Giá')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sửa Giá') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ranks.update', $rank->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Bậc Rank') }}</label>
                            <div class="col-sm-10">
                                <select id="name" class="form-control @error('name') is-invalid @enderror" name="name" required>
                                    <option value="Đồng"@if ($rank->name == 'Đồng') selected @endif>Đồng</option>
                                    <option value="Bạc"@if ($rank->name == 'Bạc') selected @endif>Bạc</option>
                                    <option value="Vàng"@if ($rank->name == 'Vàng') selected @endif>Vàng</option>
                                    <option value="Bạch Kim"@if ($rank->name == 'Bạch Kim') selected @endif>Bạch Kim</option>
                                    <option value="Kim Cương"@if ($rank->name == 'Kim Cương') selected @endif>Kim Cương</option>
                                    <option value="Tinh Anh"@if ($rank->name == 'Tinh Anh') selected @endif>Tinh Anh</option>
                                    <option value="Cao Thủ"@if ($rank->name == 'Cao Thủ') selected @endif>Cao Thủ</option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="price" class="col-sm-2 col-form-label">{{ __('Giá (VNĐ)') }}</label>
                          <div class="col-sm-10">
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ round($rank->price, 2) }}" required>
                            
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="old_price" class="col-sm-2 col-form-label">{{ __('Giá cũ (VNĐ)') }}</label>
                          <div class="col-sm-10">
                            <input id="old_price" type="number" class="form-control @error('old_price') is-invalid @enderror" name="old_price" value="{{ round($rank->old_price, 2) }}" required>
                            
                            @error('old_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="total_price" class="col-sm-2 col-form-label">{{ __('Tổng (VNĐ)') }}</label>
                          <div class="col-sm-10">
                            <input id="total_price" type="number" class="form-control @error('total_price') is-invalid @enderror" name="total_price" value="{{ round($rank->total_price, 2) }}" required>
                            
                            @error('total_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="estimated_completion_time" class="col-sm-2 col-form-label">{{ __('Thời gian hoàn thành dự kiến (Giờ)') }}</label>
                          <div class="col-sm-10">
                            <input id="estimated_completion_time" type="number" class="form-control @error('estimated_completion_time') is-invalid @enderror" name="estimated_completion_time" value="{{ $rank->estimated_completion_time }}" required>
                            
                            @error('estimated_completion_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="total_estimated_completion_time" class="col-sm-2 col-form-label">{{ __('Tổng thời gian hoàn thành dự kiến (Giờ)') }}</label>
                          <div class="col-sm-10">
                            <input id="total_estimated_completion_time" type="number" class="form-control @error('total_estimated_completion_time') is-invalid @enderror" name="total_estimated_completion_time" value="{{ $rank->total_estimated_completion_time }}" required>
                            
                            @error('total_estimated_completion_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="thumbnail" class="col-sm-2 col-form-label">{{ __('Ảnh thumbnail') }}</label>
                          <div class="col-sm-10">
                            <img src="{{ url('storage/thumbnails/' . $rank->thumbnail) }}" class="img-thumbnail rounded mx-auto d-block mb-2" alt="{{ $rank->name }}">
                            <input id="thumbnail" type="file" name="thumbnail" class="form-control-file @error('thumbnail') is-invalid @enderror">
                            
                            @error('thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-10 offset-2">
                            <button type="submit" class="btn btn-primary">{{ __('Cập nhật') }}</button>
                            <a class="btn btn-secondary" href="{{ route('ranks.index') }}" role="button">{{ __('Quay lại') }}</a>
                          </div>
                        </div>
                    </form>
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection