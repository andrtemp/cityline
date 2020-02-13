@extends('layouts.app')

@section('page-name')
    {{ __('services.header') }}
@endsection

@section('content')
    <h1>{{ __('services.header') }}</h1>
    <ul class="service">
        <a href="/pricing"><li>{{ __('services.s_1') }}</li></a>
        <a href="/pricing"><li>{{ __('services.s_2') }}</li></a>
        <a href="/pricing"><li>{{ __('services.s_3') }}</li></a>
        <a href="/pricing"><li>{{ __('services.s_4') }}</li></a>
        <a href="/pricing"><li>{{ __('services.s_5') }}</li></a>
        <a href="/pricing"><li>{{ __('services.s_6') }}</li></a>
        <a href="/pricing"><li>{{ __('services.s_7') }}</li></a>
    </ul>
@endsection
