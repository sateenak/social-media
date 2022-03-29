<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
</head>
<body>
    <article>
<h2>{{ $posting->title }}</h2>
<p>By. <a href="/author/{{ $posting->author->username }}">{{ $posting->author->name }}</a> in <a href="/categories/{{ $posting->category->slug }}">{{ $posting->category->name }}</a></p>
<p>{!! $posting->body !!}</p>
    </article>
    <a href="/coba">Back to post</a>
</body>
</html>