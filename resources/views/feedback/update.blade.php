@extends('base')

@section('content')
    <h2>Редактирование</h2>

 @include('layout.messages')

    <form action="{{route('feedback-update-submit', $item->id)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" value="{{$item->id}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" id="phone" value="{{$item->phone}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Имейл</label>
            <input type="email" name="email" id="email" value="{{$item->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Massage</label>
            <textarea name="message" id="message" class="form-control" cols="30" rows="10">{{$item->message}}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Подтвердить" class="form-control">
        </div>
    </form>
@endsection
