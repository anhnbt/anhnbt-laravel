@extends('layouts.app')

@section('title', 'Roles');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Roles') }} <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right" role="button">{{ __('Thêm mới') }}</a>
                </div>
                <div class="card-body">
                @if (count($roles) > 0)
                    <table class="table my-2">
                        <thead class="thead-light">
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col" colspan="2" class="text-center">{{ __('Tác vụ') }}</th>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <th scope="col">{{ $role->id }}</th>
                                <td>
                                @if ($role->name == 'administrator')
                                    Người quản lý
                                @elseif ($role->name == 'editor')
                                    Biên tập viên
                                @elseif ($role->name == 'author')
                                    Tác giả
                                @elseif ($role->name == 'contributor')
                                    Cộng tác viên
                                @else
                                    Thành viên đăng ký
                                @endif
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info text-white" role="button">Xem</a>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-secondary" role="button">{{ __('Chỉnh sửa') }}</a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">{{ __('Xóa') }}</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{ $roles->links() }}
                @else
                    <div class="alert alert-info" role="alert">No data found.</div>
                @endif
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection