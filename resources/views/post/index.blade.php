@extends('layouts.app')

@section('title', 'Bài viết')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('Bài viết') }} <a href="/post/create" class="btn btn-primary btn-sm">Viết bài mới</a>
        </div>
        <div class="card-body">
        @if (count($posts) > 0)
            <table class="table mb-2">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="/post/{{ $post->id }}/edit" class="btn btn-secondary btn-sm">Chỉnh sửa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        {{ $posts->links() }}
        @else
        <div class="alert alert-info" role="alert">No data found.</div>
        @endif
        </div><!-- .card-body -->
    </div><!-- .card -->
@endsection