<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi <?php echo $name . ' ' . $lastName?></h1>
    <h2>Hi {{$name . ' ' . $lastName}}</h2>
    {{--    si tengo problemas para printar algo --> {!! !!}    --}}

        @if ($name == 'Jade')
            {{'ale ale ale'}}  
        @else
            {{'nha'}}
        @endif
</body>
</html>