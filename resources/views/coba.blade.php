<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($post as $posts)
    <article>
        <h2><a href="coba/{{ $posts["slug"] }}">{{ $posts["title"] }}</a></h2>
        <h5>by {{ $posts["author"] }}</h5>
        <p>{{ $posts["body"] }}</p>
    </article>
    @endforeach
</body>
</html>