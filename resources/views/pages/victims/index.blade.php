<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Href understanding </title>
</head>
<body>
        <h1>Functionality  </h1>
        <a href="{{route('index')}}">Go home route </a>
        <a href="{{route('about')}}">Go about route</a>

        <br>
        <a href="{{ url('/')}}">Index</a>
        <a href="{{ url('/a')}}">about</a>
</body>
</html>