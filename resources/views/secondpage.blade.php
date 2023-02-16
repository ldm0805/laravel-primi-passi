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
    <div class="title">
        <h1>
            {{$welcome}}
        </h1>
    </div>
    <div class="link">
        <ul>
            @foreach ($data as $key => $item)
            <li><a href="{{route($item)}}">{{$key}}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>