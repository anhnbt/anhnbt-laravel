@extends('admin.layouts.app')

@section('title', 'Thành viên')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Thành viên') }} <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right" role="button">Thêm mới</a>
                </div>
                <div class="card-body">
                @if (count($users) > 0)
                    <table class="table mb-2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Ảnh') }}</th>
                                <th scope="col">{{ __('Tên') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Ngày tạo') }}</th>
                                <th scope="col" colspan="2" class="text-center">{{ __('Tác vụ') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row" class="text-center">{{ $user->id }}</th>
                                <td>
                                    @if ($user->avatar_url != '')
                                        <img src="{{ url('storage/avatars/' . $user->avatar_url) }}" width="50" class="img-thumbnail" alt="{{ $user->name }}">
                                    @else
                                        <img src="{{ url('images/noimage.jpg') }}" width="50" class="img-thumbnail" alt="{{ $user->name }}">
                                    @endif
                                    </td>
                                <td><a href="{{ route('users.show', $user->id) }}" class="font-weight-bold">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td><i class="far fa-clock"></i> {{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                <td class="text-center">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info text-white" role="button">{{ __('Xem') }}</a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary" role="button">{{ __('Chỉnh sửa') }}</a>
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">{{ __('Xóa') }}</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{ $users->links() }}
                @else
                <div class="alert alert-info" role="alert">{{ __('No data found.') }}</div>
                @endif
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection