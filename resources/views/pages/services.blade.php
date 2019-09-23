@extends('layouts.app')

@section('page-name')
    Услуги
@endsection

@section('content')
    <h2 class="text-center">
        Услуги
    </h2>
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
@endsection