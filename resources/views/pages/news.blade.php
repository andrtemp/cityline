@extends('layouts.app')

@section('page-name')
    Новости
@endsection

@section('content')
    <h1>Новини </h1>
    <div class="news__container">
        @foreach($news as $post)
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title text-center">{{ $post->header }}</h5>
                </div>
                <div class="card-body d-inline-flex">
                    <div class="col-md-4">
                        <img class="news__photo" src="{{ asset('storage' . $post->image) }}" class="post__image" alt="{{ $post->header }}">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text text-justify">{{ $post->main }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="pull-right">{{ date('Y-m-d H:i:s', $post->created_at->getTimestamp()) }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
