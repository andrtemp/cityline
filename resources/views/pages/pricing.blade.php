@extends('layouts.app')

@section('page-name')
    {{ __('pricing.header') }}
@endsection

@section('content')
    <h1>{{ __('pricing.header') }}</h1>
    <ul class="price">
        <a href="/contacts">
            <li>{{ __('pricing.price_1') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_2') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_3') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_4') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_5') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_6') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_7') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_8') }}</li>
        </a>
        <a href="/contacts">
            <li>{{ __('pricing.price_9') }}</li>
        </a>
    </ul>
@endsection
