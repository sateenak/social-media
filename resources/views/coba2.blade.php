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
<h2>{{ $postingan["title"] }}</h2>
<h5>{{ $postingan["author"] }}</h5>
<p>{{ $postingan["body"] }}</p>
    </article>
    <a href="/coba">Back to post</a>
</body>
</html>