@extends('layouts.app')

@section('title', $rank->name)
@section('content')
    @auth
        <a href="/rank/{{ $rank->id }}/edit" class="btn btn-info btn-sm">Edit</a>
        {!! Form::open(['action' => ['RankController@destroy', $rank->id], 'method' => 'POST', 'class' => '']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
        {!! Form::close() !!}
    @endauth
    <div class="card text-center">
        <img src="{{ url('storage/thumbnails/' . $rank->thumbnail) }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $rank->name }}</h5>
        <p class="card-text"><span class="font-weight-bold">{{ number_format($rank->price, 2) }} ₫</span> / <s class="text-muted">{{ number_format($rank->old_price, 2) }} ₫</s></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection