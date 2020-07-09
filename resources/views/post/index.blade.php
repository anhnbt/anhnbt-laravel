@extends('layouts.app')

@section('title', 'Bài viết')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Bài viết') }} <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">{{ __('Viết bài mới') }}</a>
                </div>
                <div class="card-body">
                @if (count($posts) > 0)
                    <table class="table mb-2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Tiêu đề') }}</th>
                                <th scope="col">{{ __('Tác giả') }}</th>
                                <th scope="col">{{ __('Chuyên mục') }}</th>
                                <th scope="col">{{ __('Thời gian') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col" colspan="2" class="text-center">{{ __('Thao tác') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row" class="text-center">{{ $post->id }}</th>
                                <td class="text-truncate" style="max-width: 16rem;"><a href="{{ route('posts.show', $post->id) }}" class="font-weight-bold">{{ $post->title }}</a></td>
                                <th><a href="{{ route('users.show', $post->user_id) }}">{{ $post->user->name }}</a></th>
                                <th><span class="badge badge-pill badge-dark">{{ $post->category->name }}</span></th>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    @if ($post->is_active == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">In Active</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info text-white btn-sm">Xem</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-sm">Chỉnh sửa</a>
                                </td>
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
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection