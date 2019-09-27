@extends('layouts.app')

@section('page-name')
    Контакты
@endsection

@section('end-full-screen')
@endsection

@section('content')
    <h2 class="text-center mb-5">
        Контакты
    </h2>
    <div class="contact__page">
        <div class="page__block contacts__items">
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
                <span>office@cityline.dn.ua</span>
            </span>
            <span class="item__row">
                <i class="fa fa-map-marker mr-3"></i>
                <span>Донецкая область, г. Комсомолськое, ул. Ленина 12Е</span>
            </span>
            <div class="item__row">
                <i class="fa fa-list mr-3"></i>
                <div>
                    <p>Понедельник - Пятница с 9:00 до 18:00</p>
                    <p>Суббота - Воскресенье с 9:00 до 16:00</p>
                </div>
            </div>
        </div>
        <div class="page__block contacts__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d849.212608782755!2d38.072837829262966!3d47.67091390178304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDQwJzE1LjMiTiAzOMKwMDQnMjQuMiJF!5e1!3m2!1sru!2sua!4v1569615971390!5m2!1sru!2sua" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>

@endsection