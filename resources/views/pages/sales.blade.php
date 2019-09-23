@extends('layouts.app')

@section('page-name')
    Акции
@endsection

@section('content')
    <h2 class="text-center">
        Скидки
    </h2>
    <div class="main__content">
        <div class="card__list">
            @foreach($sales as $name => $sale)
                <div class="card">
                    <h3 class="card-header">
                        {{ $name }}
                    </h3>
                    <div class="card-body">
                        {{ $sale->description }}
                    </div>
                    <div class="card-footer">
                        <span class="card__price">
                            {{ $sale->price }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection