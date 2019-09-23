@extends('layouts.app')

@section('page-name')
    Цены
@endsection

@section('content')
    <h2 class="text-center">
        Цены
    </h2>
    <div class="main__content">
        <div class="card__list">
            @foreach($prices as $name => $price)
                <div class="card">
                    <h3 class="card-header">
                        {{ $name }}
                    </h3>
                    <div class="card-body">
                        {{ $price->description }}
                        <span class="text-lg-right text-danger">
                        {{ $price->price }}
                    </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection