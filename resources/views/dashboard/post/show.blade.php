@extends('dashboard.layouts.main')
@section('container')
    
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
<article>
<h2>{{ $post->title }}</h2>
<a href="/dashboard/posting" class="btn btn-success my-3"><span data-feather="arrow-left"></span> Back to my all posts</a>
<a href="" class="btn btn-warning my-3"><span data-feather="edit"></span> Edit</a>
<a href="" class="btn btn-danger my-3"><span data-feather="x-circle"></span> Delete</a>
<img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
<p class="m-3" style="text-align: justify">{!! $post->body !!}</p>
    </article>
    <a href="/coba" class="text-decoration-none">Back to post</a>
        </div>
    </div>
</div>
    
    @endsection