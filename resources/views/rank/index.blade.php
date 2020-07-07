@extends('layouts.app')

@section('title', 'Rank')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Rank') }} <a href="{{ route('ranks.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus-circle"></i> Thêm bậc rank</a>
                </div>
                <div class="card-body">
                @if(count($ranks) > 0)
                    <table class="table my-2">
                        <thead class=" thead-light">
                            <th scope="col">#</th>
                            <th scope="col">Bậc rank</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col" class="text-center">Thao tác</th>
                        </thead>
                        <tbody>
                        @foreach ($ranks as $rank)
                            <tr>
                                <th scope="col">{{ $rank->id }}</th>
                                <td><a href="{{ route('ranks.show', $rank->id) }}" class="font-weight-bold">{{ $rank->name }}</a></td>
                                <td>{{ number_format($rank->price) }} ₫</td>
                                <td>{{ $rank->estimated_completion_time }} giờ</td>
                                <td>{{ $rank->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('ranks.show', $rank->id) }}" class="btn btn-secondary btn-sm mr-2"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('ranks.edit', $rank->id) }}" class="btn btn-info text-white btn-sm"><i class="far fa-edit"></i></a>
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