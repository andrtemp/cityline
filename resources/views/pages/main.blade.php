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
            <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <section class="mb-3">
        <h3 class="text-center mb-3">
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
    <section class="mb-3">
        <h3 class="text-center mb-3">
            Контакты
        </h3>
        <div class="contacts__items">
        <span class="item__row">
            <i class="fa fa-phone mr-3"></i>
            <span>071-304-74-74</span>
        </span>
            <span class="item__row">
            <i class="fa fa-phone mr-3"></i>
            <span>099-734-999-1</span>
        </span>
            <span class="item__row">
            <i class="fa fa-envelope mr-3"></i>
            <span>andr.evich11@gmail.com</span>
        </span>
            <span class="item__row">
            <i class="fa fa-map-marker mr-3"></i>
            <span>Париж, Елисейчкие поля, 1</span>
        </span>
        </div>
    </section>
@endsection