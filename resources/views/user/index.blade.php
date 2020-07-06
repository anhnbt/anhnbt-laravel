@extends('layouts.app')

@section('title', 'Thành viên')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Thành viên') }} <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus-circle"></i> Tạo</a>
                </div>
                <div class="card-body">
                @if (count($users) > 0)
                    <table class="table mb-2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col" colspan="2" class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row" class="text-center">{{ $user->id }}</th>
                                <td><a href="{{ route('user.show', $user->id) }}" class="font-weight-bold">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-secondary btn-sm mr-2"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info text-white btn-sm"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{ $users->links() }}
                @else
                <div class="alert alert-info" role="alert">No data found.</div>
                @endif
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection