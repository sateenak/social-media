@extends('layouts.latihan')
@section('body')
    

    <article>
<h2>{{ $posting->title }}</h2>
<p>By. <a href="/author/{{ $posting->author->username }}" class="text-decoration-none">{{ $posting->author->name }}</a> in <a href="/categories/{{ $posting->category->slug }}" class="text-decoration-none">{{ $posting->category->name }}</a></p>
<p>{!! $posting->body !!}</p>
    </article>
    <a href="/coba" class="text-decoration-none">Back to post</a>
    @endsection