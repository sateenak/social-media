@extends('dashboard.layouts.main')
@section('container')
    
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
<article>
<h2>{{ $post->title }}</h2>
<a href="/dashboard/posting" class="btn btn-success my-3"><span data-feather="arrow-left"></span> Back to my all posts</a>
<a href="/dashboard/posting/{{ $post->slug }}/edit" class="btn btn-warning my-3"><span data-feather="edit"></span> Edit</a>
<form action="/dashboard/posting/{{ $post->slug }}" method="POST" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
</form>
@if ($post->image)
<div style="max-height: 400px; overflow: hidden;">
<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
</div>
@else
<img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

@endif
<p class="m-3" style="text-align: justify">{!! $post->body !!}</p>
    </article>
        </div>
    </div>
</div>
    
    @endsection