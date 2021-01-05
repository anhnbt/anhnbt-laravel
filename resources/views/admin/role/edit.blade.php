@extends('layouts.app')

@section('title', 'Edit Roles')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit role') }}</div>

                <div class="card-body">
                    <form action="{{ route('roles.edit', $role->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select id="name" class="form-control @error('name') is-invalid @enderror" name="name" required>
                                    <option value="administrator" @if ($role->name == 'administrator') selected @endif>Người quản lý</option>
                                    <option value="editor" @if ($role->name == 'editor') selected @endif>Biên tập viên</option>
                                    <option value="author" @if ($role->name == 'author') selected @endif>Tác giả</option>
                                    <option value="contributor" @if ($role->name == 'contributor') selected @endif>Cộng tác viên</option>
                                    <option value="subscriber" @if ($role->name == 'subscriber') selected @endif>Thành viên đăng ký</option>
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