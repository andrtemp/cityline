@extends('layouts.admin')

@section('content')
    <h2>
        @if(isset($post))
            Редактировать новость
        @else
            Добавить новость
        @endif
    </h2>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ !isset($post) ? url('admin/news/form') : url('admin/news/form/' . $post->id) }}" enctype="multipart/form-data">
        @csrf
        @if(isset($post)) @method('PUT') @endif
        <div class="form-group">
            <label for="header">Заголовок</label>
            <input type="text" name="header" class="form-control" id="header" aria-describedby="header" placeholder="Заголовок"
            @if(isset($post)) value="{{ $post->header }}" @endif />
        </div>
        @if(isset($post))
            <img class="form__image" src="{{ asset('storage' . $post->image) }}" alt="{{ $post->header }}">
        @endif
        <div class="form-group">
            <label for="image">Фото</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="form-group">
            <label for="main">Текст</label>
            <textarea class="form-control" name="main" id="main" placeholder="Текст новости">@if(isset($post)) {{ $post->main }} @endif</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection