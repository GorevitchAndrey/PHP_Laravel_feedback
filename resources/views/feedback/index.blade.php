@extends('base')

@section('content')
    <h2>Обратная связь</h2>

 @include('layout.messages')

    <form action="{{route('feedback-submit')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" id="phone" placeholder="Пример '8-(977)-976-48-26'" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Имейл</label>
            <input type="email" name="email" id="phone" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Massage</label>
            <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Отправить" class="form-control">
        </div>

    </form>
@endsection
