@extends('admin.layouts.app')

@section('title', $rank->name)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="position-relative">
                    <span class="badge badge-dark position-absolute p-2" style="bottom: 10px; left: 10px;"><i class="far fa-clock"></i> {{ $rank->estimated_completion_time }} giờ</span>
                    <img src="{{ url('storage/thumbnails/' . $rank->thumbnail) }}" class="card-img-top" alt="{{ $rank->name }}">
                </div>
                <div class="card-body">
                <h5 class="card-title display-4 text-primary">{{ $rank->name }}</h5>
                <p class="card-text"><span class="font-weight-bold text-danger">{{ number_format($rank->price) }} ₫</span> / <s class="text-muted">{{ number_format($rank->old_price) }} ₫</s></p>
                @auth
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('ranks.edit', $rank->id) }}" class="btn btn-primary btn-lg btn-block" role="button"><i class="far fa-edit"></i> Edit</a>
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(['action' => ['RankController@destroy', $rank->id], 'method' => 'POST', 'class' => '']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
                @endauth
                </div><!-- .card-body -->
            </div><!-- .card -->
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- .container -->
@endsection