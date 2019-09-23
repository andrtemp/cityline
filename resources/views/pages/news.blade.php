@extends('layouts.app')

@section('page-name')
    Новости
@endsection

@section('content')
    <h2 class="text-center">
        Новости
    </h2>
    <div class="news__container">
        @foreach($news as $post)
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">{{ $post->header }}</h5>
                </div>
                <div class="card-body d-inline-flex">
                    <div class="col-md-8">
                        <p class="card-text">{{ $post->main }}</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('storage' . $post->image) }}" class="post__image" alt="{{ $post->header }}">
                    </div>
                </div>
                <div class="card-footer">
                    {{ date('Y-m-d H:i:s', $post->created_at->getTimestamp()) }}
                </div>
            </div>
        @endforeach
    </div>
@endsection