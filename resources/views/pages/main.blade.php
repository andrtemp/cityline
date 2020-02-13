@extends('layouts.app')

@section('page-name')
    {{ __('main.header') }}
@endsection

@section('content')
    <h1>{{ __('main.h1') }}</h1>
    <div class="aboutMe">
        <div class="aboutMe__iconWrap">
            <div class="aboutMe__icon aboutMe__iconMain">
                <a href="{{ asset('img/aboutMe1.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
                    <img src="{{ asset('img/aboutMe1.jpg') }}" alt="lawyer" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="aboutMe__text">
            <h4 class="aboutMe__text-title">
                {{ __('main.header') }}
                <span>{{ __('main.stage') }}</span>
            </h4>
            <img class="aboutMe__text-image" src="{{ asset('img/photo.png') }}" alt="Фото"/>
            <br/>
            <p>{{ __('main.meet') }}</p>
            <br/>
            <p>{{ __('main.ready') }}</p>
            <br/>
            <p>{{ __('main.have') }}</p>
            <br/>
            <p>{{ __('main.not') }}</p>
            <br/>
            <p>{{ __('main.problem') }}</p>
            <p>{{ __('main.do') }}</p>
            <p>{{ __('main.interested') }}</p>
            <br/>
            <div class="aboutMe__text-phone">
                <i class="fa fa-phone"></i>
                <a href="tel:066-884-53-50">097-02-04-083</a>
            </div>
            <div class="aboutMe__text-phone">
                <i class="fa fa-phone"></i>
                <a href="tel:066-884-53-50">066-884-53-50</a>
            </div>
        </div>
    </div>
@endsection
