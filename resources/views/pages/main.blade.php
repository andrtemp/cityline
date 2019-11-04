@extends('layouts.app')

@section('page-name')
    City Line
@endsection

@section('content')
    <h1>Про мене</h1>
    <div class="aboutMe">
        <div class="aboutMe__iconWrap">
            <div class="aboutMe__icon aboutMe__iconMain"><img src="icon.jpeg" alt="lawyer"></div>
            <div class="aboutMe__icon"><img src="icon.jpeg" alt="lawyer"></div>
            <div class="aboutMe__icon"><img src="/icon.jpeg" alt="lawyer"></div>
        </div>
        <div class="aboutMe__text">
            Адвокат  Щербина Євгеній Євгенійович  з   10  річним стажем роботи
            <br> Телефон : 066-884-53-50 097-02-04-083
        </div>
    </div>
@endsection