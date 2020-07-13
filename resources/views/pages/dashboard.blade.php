@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @auth('admin')
            <div class="alert alert-info" role="alert">
                Xin chào <span class="font-weight-bold text-danger">{{ Auth::user()->name }}</span>! Bạn đã đăng nhập vào khu vực Quản trị!
            </div>
            @endauth
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard 1.0') }} <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus-circle"></i> Viết bài mới</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                    <table class="table">
                        <thead class="thead-light">
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Tác vụ</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="col">{{ $post->id }}</td>
                                <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info text-white btn-sm"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="alert alert-info" role="alert">No data found.</div>
                    @endif
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection
