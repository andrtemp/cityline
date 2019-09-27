@extends('layouts.app')

@section('page-name')
    City Line
@endsection

@section('start-full-screen')
    <div class="container">
        <div id="sales_slider" data-interval="3000" class="carousel slide z-depth-1-half" data-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 1; $i < 4; $i++)
                    <div class="carousel-item {{ $i > 1 ? '' : 'active' }}">
                        <img class="d-block w-100" src="{{ asset('img/slider/' . $i . '.jpg') }}" alt="{{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="mb-3">
        <h3 class="text-center mb-5 mt-3">
            Последние новости
        </h3>
        <div class="news__container">
            @foreach($news as $post)
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title text-center">{{ $post->header }}</h5>
                    </div>
                    <div class="card-body d-inline-flex">
                        <div class="col-md-4">
                            <img src="{{ asset('storage' . $post->image) }}" class="post__image" alt="{{ $post->header }}">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text text-justify">{{ $post->main }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="pull-right">
                             {{ $post->created_at }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection