@extends('base')

@section('content')
    <h2>Сообщение</h2>
@include('layout.messages')
        <div class="alert alert-primary">
            <div>Порядковый номер: {{$item -> id}}</div>
            <div>Телефон: {{$item -> phone}}</div>
            <div>Имейл: {{$item -> email}}</div>
            <div>Текст сообщения: {{$item -> message}}</div>
            <div style="display: flex">
                <form method="get" action="{{route('feedback-update', $item->id)}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="updateSubmit" />
                    <button type="submit" class="alert">Редактировать</button>
                </form>

                <form method="post" action="{{route('feedback-delete', $item->id)}}" style="margin-left: 10px;">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="delete" />
                    <button type="submit" class="alert">Удалить</button>
                </form>
            </div>


{{--            <div style="margin-top: 50px">Время создания: {{$item -> created_at}}</div>--}}
            <div>Время редактирования: {{$item -> updated_at}}</div>

        </div>


@endsection
