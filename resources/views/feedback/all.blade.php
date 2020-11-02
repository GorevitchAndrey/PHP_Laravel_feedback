@extends('base')

@section('content')
    <h2>Список сообщений</h2>
@include('layout.messages');
    @foreach($list as $item)
        <div class="alert alert-primary">
            <div>{{$item -> phone}}</div>
            <div><b>{{$item -> email}}</b></div>
            <div>
                <a href="{{route('feedback-view', $item->id)}}">
                    Подробнее
                </a>
            </div>
        </div>
    @endforeach

@endsection
