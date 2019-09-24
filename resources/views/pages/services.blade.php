@extends('layouts.app')

@section('page-name')
    Услуги
@endsection

@section('content')
    <h2 class="text-center mb-5">
        Услуги
    </h2>
    <div class="services__list">
        @for ($i = 1; $i < 6; $i++)
            <div class="services__image">
                <img src="{{ asset('img/tarif/' . $i . '.png') }}" alt="{{ $i }}">
            </div>
        @endfor
    </div>
@endsection