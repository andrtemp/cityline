@extends('layouts.app')

@section('page-name')
    Контакты
@endsection

@section('end-full-screen')
    <div class="contacts__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.75769515672!2d2.2770204952070294!3d48.85895068064805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2z0J_QsNGA0LjQtiwg0KTRgNCw0L3RhtC40Y8!5e0!3m2!1sru!2sua!4v1568889292050!5m2!1sru!2sua"  height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
@endsection

@section('content')
    <h2 class="text-center">
        Контакты
    </h2>
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

@endsection