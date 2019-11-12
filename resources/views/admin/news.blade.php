@extends('layouts.admin')

@section('content')
    <div class="news__list">
        @foreach($news as $item)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $item->header }}
                </div>
                <div class="card-body">
                    {{ $item->main }}
                </div>
                <div class="card-footer">
                    <div class="row">
                    <span class="col-md-8">{{ date('Y-m-d H:i:s', $item->created_at->getTimestamp()) }}</span>
                        <div class="col-md-4 pull-right d-inline-flex">
                            <a class="btn btn-primary mr-3" href="{{ url('/admin/news/' . $item->id . '/edit') }}">
                                Редактировать
                            </a>
                            <div>
                                <form action="{{ url('/admin/news/' . $item->id ) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection