@extends('layouts.app')

@section('title', $user->name)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Sửa Hồ Sơ') }}: {{ $user->name }}
                </div>
                <div class="card-body">
                    @auth
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-form-label col-sm-2">{{ __('Name') }}</label>
                            <div class="col-sm-10">
                                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" required>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-form-label col-sm-2">{{ __('E-Mail Address') }}</label>
                            <div class="col-sm-10">
                                <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-primary">{{ __('Cập nhật') }}</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary">{{ __('Quay lại') }}</a>
                            </div>
                        </div>
                    </form>
                    @endauth
                </div>
                <div class="card-footer text-muted">
                    <small>{{ __('Tham gia từ') }} {{ $user->created_at }}</small>
                </div>
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection