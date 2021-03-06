@extends('layouts.latihan')
@section('body')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<article>
<h2>{{ $posting->title }}</h2>
<p>By. <a href="/coba?author={{ $posting->author->username }}" class="text-decoration-none">{{ $posting->author->name }}</a> in <a href="/coba?category={{ $posting->category->slug }}" class="text-decoration-none">{{ $posting->category->name }}</a></p>
<@if ($posting->image)
<div style="max-height: 400px; overflow: hidden;">
<img src="{{ asset('storage/' . $posting->image) }}" alt="{{ $posting->category->name }}" class="img-fluid">
</div>
@else
<img src="https://source.unsplash.com/1200x400/?{{ $posting->category->name }}" alt="{{ $posting->category->name }}" class="img-fluid">

@endif
<p class="m-3">{!! $posting->body !!}</p>
    </article>
    <a href="/coba" class="text-decoration-none">Back to post</a>
        </div>
    </div>
</div>
    
    @endsection