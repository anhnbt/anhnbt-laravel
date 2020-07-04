@extends('layouts.app')

@section('title', 'Rank')
@section('content')
    <div class="card">
        <div class="card-header">{{ __('Rank') }} <a href="/rank/create" class="btn btn-secondary btn-sm">Thêm bậc rank</a></div>

        <div class="card-body">
            @if(count($ranks) > 0)
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Bậc rank</th>
                    <th>Giá</th>
                    <th>Thời gian hoàn thành dự kiến</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
                @foreach ($ranks as $rank)
                <tr>
                    <td>{{ $rank->id }}</td>
                    <td><a href="/rank/{{ $rank->id }}">{{ $rank->name }}</a></td>
                    <td>{{ number_format($rank->price, 2) }} ₫</td>
                    <td>{{ $rank->estimated_completion_time }} Giờ</td>
                    <td>{{ $rank->created_at }}</td>
                    <td><a href="/rank/{{ $rank->id }}" class="btn btn-secondary btn-sm">Xem</a>&nbsp;<a href="/rank/{{ $rank->id }}/edit" class="btn btn-info btn-sm">Chỉnh sửa</a></td>
                </tr>
                @endforeach
            </table>
            {{ $ranks->links() }}
            @else
                <div class="alert alert-info" role="alert">No data found.</div>
            @endif
        </div>
    </div>
@endsection