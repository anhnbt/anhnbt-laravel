@extends('layouts.app')

@section('title', 'Rank')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Rank') }} <a href="{{ route('ranks.create') }}" class="btn btn-primary btn-sm float-right" role="button">Tạo mới</a>
                </div>
                <div class="card-body">
                @if(count($ranks) > 0)
                    <table class="table my-2">
                        <thead class=" thead-light">
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Rank</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col" colspan="2" class="text-center">Tác vụ</th>
                        </thead>
                        <tbody>
                        @foreach ($ranks as $rank)
                            <tr>
                                <th scope="col">{{ $rank->id }}</th>
                                <td><img src="{{ url('storage/thumbnails/' . $rank->thumbnail) }}" width="50" class="img-thumbnail" alt="{{ $rank->name }}"></td>
                                <td><a href="{{ route('ranks.show', $rank->id) }}" class="font-weight-bold">{{ $rank->name }}</a></td>
                                <td>{{ number_format($rank->price) }} ₫</td>
                                <td>{{ $rank->estimated_completion_time }} giờ</td>
                                <td>{{ Carbon\Carbon::parse($rank->created_at)->diffForHumans() }}</td>
                                <td class="text-center">
                                    <form action="{{ route('ranks.destroy', $rank->id) }}" method="POST">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="{{ route('ranks.show', $rank->id) }}" class="btn btn-info text-white" role="button">{{ __('Xem') }}</a>
                                            <a href="{{ route('ranks.edit', $rank->id) }}" class="btn btn-secondary" role="button">{{ __('Chỉnh sửa') }}</a>
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
                {{ $ranks->links() }}
                @else
                    <div class="alert alert-info" role="alert">No data found.</div>
                @endif
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection