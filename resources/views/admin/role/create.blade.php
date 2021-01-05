@extends('layouts.app')

@section('title', 'Add Roles')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add role') }}</div>

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select id="name" class="form-control @error('name') is-invalid @enderror" name="name" required>
                                    <option value="administrator">Người quản lý</option>
                                    <option value="editor">Biên tập viên</option>
                                    <option value="author">Tác giả</option>
                                    <option value="contributor">Cộng tác viên</option>
                                    <option value="subscriber">Thành viên đăng ký</option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-primary">{{ __('Lưu') }}</button>
                                <a href="{{ route('roles.index') }}" class="btn btn-link" role="button">{{ __('Hủy') }}</a>
                            </div>
                        </div>
                    </form>
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection