<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
</head>


<body>
    <h1>
        {{$welcome}}
    </h1>
    <a href="{{route('homepage')}}">Homepage</a>
    <a href="{{route('secondpage')}}">Seconda pagina</a>
</body>

</html>