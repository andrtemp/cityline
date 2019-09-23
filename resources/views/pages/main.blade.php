@extends('layouts.app')

@section('page-name')
    City Line
@endsection

@section('start-full-screen')
    <div>
        <div id="sales_slider" data-interval="3000" class="carousel slide z-depth-1-half" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/slider/1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider/2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider/3.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider/4.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider/5.jpg') }}" alt="Third slide">
                </div>
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
    <section class="mb-3">
        <h3 class="text-center">
            Услуги
        </h3>
        <div class="services__items">
            <div class="block__item">
                <i class="fa fa-wifi item__image"></i>
                <p class="item__text">
                    Интернет
                </p>
            </div>
            <div class="block__item">
                <i class="fa fa-tv item__image"></i>
                <p class="item__text">
                    Телевидение нового поколения
                </p>
            </div>
        </div>
    </section>
@endsection