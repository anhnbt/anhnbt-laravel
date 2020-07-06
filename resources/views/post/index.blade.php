@extends('layouts.app')

@section('title', 'Bài viết')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Bài viết') }} <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus-circle"></i> {{ __('Viết bài mới') }}</a>
                </div>
                <div class="card-body">
                @if (count($posts) > 0)
                    <table class="table mb-2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Tiêu đề') }}</th>
                                <th scope="col">{{ __('Ngày tạo') }}</th>
                                <th scope="col" colspan="2" class="text-center">{{ __('Thao tác') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row" class="text-center">{{ $post->id }}</th>
                                <td><a href="{{ route('posts.show', $post->id) }}" class="font-weight-bold">{{ $post->title }}</a></td>
                                <td>{{ $post->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary btn-sm mr-2"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info text-white btn-sm"><i class="far fa-edit"></i></a>
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