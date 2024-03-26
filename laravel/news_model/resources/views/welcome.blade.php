<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home SEWARO🙏🙏</h1>

    <ul>
        @foreach ($news as $value)
        <li>
            <div>
                <h1><a href="news/">{{ $value['title'] }}</a></h1>
                <p>{{$value['description']}}</p>
            </div>
        </li>
        @endforeach
    </ul>

</body>
</html>