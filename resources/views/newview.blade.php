<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if (is_numeric($var1) && is_numeric($var2))
<h1>{{$var1-$var2}}</h1>
<h1>{{$var1+$var2}}</h1>
@else
<h1>You got fucked</h1>
@endif

</body>
</html>
