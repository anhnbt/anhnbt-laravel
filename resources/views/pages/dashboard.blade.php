@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">Xin chào <strong>{{ Auth::user()->name }}</strong>! Bạn đã đăng nhập vào khu vực Quản trị!</div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="/post/create" class="btn btn-secondary btn-sm">Viết bài mới</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Tiêu đề</th>
                            <th>Ngày tạo</th>
                            <th>Thao tác</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="/post/{{ $post->id }}/edit" class="btn btn-info btn-sm">Chỉnh sửa</a></td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <div class="alert alert-info" role="alert">No data found.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
