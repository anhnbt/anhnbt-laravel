@extends('admin.layouts.app')

@section('title', $user->name)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Hồ sơ') }}: {{ $user->name }}
                </div>
                <div class="card-body">
                    @auth
                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-form-label col-sm-2">{{ __('Họ và tên') }}</label>
                            <div class="col-sm-10">
                                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" placeholder="Nhập họ và tên của bạn" required>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-form-label col-sm-2">{{ __('Địa chỉ Email') }} <span class="text-danger">(bắt buộc)</span></label>
                            <div class="col-sm-10">
                                <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" placeholder="Nhập email (Bắt buộc)" aria-describedby="emailHelp" required>
                                <small id="emailHelp" class="form-text text-muted">Địa chỉ mà chúng tôi có thể liên hệ với bạn nếu tài khoản của bạn có hoạt động bất thường hoặc bị khóa.</small>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone_number" class="col-form-label col-sm-2">{{ __('Số điện thoại') }}</label>
                            <div class="col-sm-10">
                                <input id="phone_number" type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ $user->phone_number }}">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="birthday" class="col-form-label col-sm-2">{{ __('Ngày sinh') }}</label>
                            <div class="col-sm-10">
                                <input id="birthday" type="text" name="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ $user->birthday }}" placeholder="YYYY-MM-DD (VD: 1995-11-16)">

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="gender" class="col-form-label col-sm-2">{{ __('Gender') }}</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input id="male" type="radio" class="form-check-input" name="gender" value="male" @if ($user->gender == 'male') checked @endif>
                                    <label for="male" class="form-check-label">Anh</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="female" type="radio" class="form-check-input" name="gender" value="female" value="male" @if ($user->gender == 'female') checked @endif>
                                    <label for="female" class="form-check-label">Chị</label>
                                </div>
                                

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar_url" class="col-sm-2 col-form-label">{{ __("Ảnh đại diện") }}</label>
                            <div class="col-sm-10">
                                @if ($user->avatar_url != '')
                                    <img src="{{ url('storage/avatars/' . $user->avatar_url) }}" width="50" class="img-thumbnail mb-2" alt="{{ $user->name }}">
                                @else
                                    <img src="{{ url('images/avatar-default.png') }}" width="50" class="img-thumbnail mb-2" alt="{{ $user->name }}">
                                @endif
                                <input id="avatar_url" type="file" class="form-control-file @error('avatar_url') is-invalid @enderror" name="avatar_url">

                                @error('avatar_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-primary">{{ __('Cập nhật hồ sơ') }}</button>
                                <a href="{{ route('users.index') }}" class="btn btn-link" role="button">{{ __('Hủy') }}</a>
                            </div>
                        </div>
                    </form>
                    @endauth
                </div>
                <div class="card-footer text-muted">
                    <small>{{ __('Tham gia từ') }} {{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</small>
                </div>
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection