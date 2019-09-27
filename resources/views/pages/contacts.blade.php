@extends('layouts.app')

@section('page-name')
    Контакты
@endsection

@section('end-full-screen')
    <div class="contacts__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2686.679629266126!2d38.07052421587632!3d47.67121979150469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e0dc1d2b2d0809%3A0x18eae3f5867517cc!2z0LLRg9C70LjRhtGPINCb0LXQvdGW0L3QsCwgMTIsINCa0LDQu9GM0LzRltGD0YHRjNC60LUsINCU0L7QvdC10YbRjNC60LAg0L7QsdC70LDRgdGC0YwsIDg3MjUx!5e0!3m2!1sru!2sua!4v1569263149838!5m2!1sru!2sua" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>    </div>
@endsection

@section('content')
    <h2 class="text-center mb-5">
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
            <span>office@cityline.dn.ua</span>
        </span>
        <span class="item__row">
            <i class="fa fa-map-marker mr-3"></i>
            <span>Донецкая область, г. Комсомолськое, ул. Ленина 12Е</span>
        </span>
    </div>

@endsection