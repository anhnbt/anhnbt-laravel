@extends('layouts.app')

@section('title', 'Rank')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('Rank') }} <a href="/rank/create" class="btn btn-primary btn-sm">Thêm bậc rank</a>
        </div>
        <div class="card-body">
        @if(count($ranks) > 0)
            <table class="table my-2">
                <thead class=" thead-light">
                    <th scope="col">#</th>
                    <th scope="col">Bậc rank</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Thời gian hoàn thành dự kiến</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Thao tác</th>
                </thead>
                <tbody>
                @foreach ($ranks as $rank)
                    <tr>
                        <th scope="col">{{ $rank->id }}</th>
                        <td><a href="/rank/{{ $rank->id }}">{{ $rank->name }}</a></td>
                        <td>{{ number_format($rank->price, 2) }} ₫</td>
                        <td>{{ $rank->estimated_completion_time }} Giờ</td>
                        <td>{{ $rank->created_at }}</td>
                        <td><a href="/rank/{{ $rank->id }}" class="btn btn-secondary btn-sm">Xem</a>&nbsp;<a href="/rank/{{ $rank->id }}/edit" class="btn btn-primary btn-sm">Chỉnh sửa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        {{ $ranks->links() }}
        @else
            <div class="alert alert-info" role="alert">No data found.</div>
        @endif
        </div>
    </div>
@endsection