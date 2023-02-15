<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>Laravel</title>
</head>
<body>
    <div>
        <h1>Benvenuto in laravel</h1>
    </div>
    <div class="col">
        <a href="{{route('secondpage')}}">Seconda pagina</a>
        <a href="{{route('thirdpage')}}">Terza pagina</a>
    </div>
</body>
</html>
