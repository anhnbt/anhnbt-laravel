@extends('layouts.app')

@section('title', 'Chuyên mục')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Chuyên mục') }} <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right">{{ __('Thêm chuyên mục') }}</a>
                </div>
                <div class="card-body">
                @if (count($categories) > 0)
                    <table class="table mb-2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Tên') }}</th>
                                <th scope="col">{{ __('Mô tả') }}</th>
                                <th scope="col">{{ __('Chuỗi cho đường dẫn tĩnh') }}</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col" colspan="2" class="text-center">{{ __('Tác vụ') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row" class="text-center">{{ $category->id }}</th>
                                <td><a href="{{ route('categories.show', $category->id) }}" class="font-weight-bold">{{ $category->name }}</a></td>
                                <td>{{ $category->description ?? '—' }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info text-white btn-sm">Xem</a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary btn-sm">Chỉnh sửa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{ $categories->links() }}
                @else
                <div class="alert alert-info" role="alert">No data found.</div>
                @endif
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection