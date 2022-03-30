@extends('layouts.latihan')
    @section('body')
    <div class="container">
    @if ($posts->count())
    <div class="card mb-3">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body text-xl-center">
        <h3 class="card-title">{{ $posts[0]->title }}</h3>
        <p><small class="text-muted">By. <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/coba/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
      </div>
    </div>
    @else
        <p>No post found.</p>
    @endif
        
        <h1>{{ $judul }}</h1>
    @foreach ($posts as $post)
    <article class="border-bottom pb-4">
        <h2><a href="/coba/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/coba/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
    </article>
    @endforeach
    @endsection
      
