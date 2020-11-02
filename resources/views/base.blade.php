<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/product.css">
    <title>Document</title>
</head>
<body>
@include('layout.header')

{{--ограничение, чтоь приветствие было только на главной странице--}}
@if(Request::is('/'))
    @include('layout.greetings')
@endif

<div class="container">
    <div class="route">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>

@include('layout.footer')

</body>
</html>