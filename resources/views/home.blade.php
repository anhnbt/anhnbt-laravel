@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="/post/create" class="btn btn-primary btn-sm">Add New Post</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="/post/{{ $post->id }}/edit" class="btn btn-info btn-sm">Edit</a></td>
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
