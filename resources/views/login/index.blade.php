@extends('base')

@section('content')
    <h2>Вход</h2>

    @include('layout.messages')

    <form action="{{route('login-submit')}}" method="post">
    {{csrf_field()}}
        <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login" placeholder="Логин" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="text" name="password" id="password" placeholder="Пароль" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Войти" class="form-control">
        </div>

    </form>
@endsection