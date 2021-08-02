<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@include('partials.nav')
<ul>
    @php
        $arr = ["Orange", "Bleu", "Vert", "D'autres"];
    @endphp
    @foreach ($arr as $item)
    @if ($item == $color)
    <li style="font-weight: bold">{{$item}}</li>
    @else
    <li>{{$item}}</li>
    @endif
    @endforeach
</ul>
</body>
</html>
