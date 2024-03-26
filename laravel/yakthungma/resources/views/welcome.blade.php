<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> {{$title}}</h1>
    </header>

    @if($exp) 
        <h4>This website is expired.</h4>
    @endif  
    <section>
        <ul>
           @foreach($news as $single_news)
           <h1>{{$single_news}}</h1>
           @endforeach
        </ul>
    </section>

</body>
</html>