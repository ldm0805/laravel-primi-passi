<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>laravel</title>
</head>
    <body>
        <h1>
            {{$welcome}}
        </h1>
        <a href="{{route('homepage')}}">Homepage</a>
        <a href="{{route('secondpage')}}">Seconda pagina</a>
    </body>

</html>
