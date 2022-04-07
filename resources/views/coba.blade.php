@extends('layouts.latihan')
    @section('body')
    <div class="container">
       <h1 class="text-center mb-5">{{ $judul }}</h1>
       <div class="row justify-content-center mb-3">
         <div class="col-md-6">
           <form action="/coba" method="">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search Post" name="search" value="{{ request('search') }}">
              <button class="btn btn-danger" type="submit">Search</button>
            </div>
          </form>
         </div>
       </div>
    @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
<div style="max-height: 400px; overflow: hidden;">
<img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
</div>
@else
<img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
@endif
      <div class="card-body text-xl-center">
        <h3 class="card-title"><a href="/coba/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p><small class="text-muted">By. <a href="/coba?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/coba?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/coba/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
      </div>
    </div>
    @else
        <h4 class="text-center">No post found.</h4>
    @endif
        <div class="container">
          <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mt-2">
              <div class="card">
                <a href="/coba?category={{ $post->category->slug }}">
                <div class="position-absolute px-3 py-2 text-white rounded-end" style="background-color: rgba(0, 0, 0, .7)">{{ $post->category->name }}</div></a>
                @if ($post->image)
                  <div style="max-height: 400px; overflow: hidden; max-width: 500px">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                  </div>
                @else
                  <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                @endif
                <div class="card-body">
                  <h5 class="card-title"><a href="/coba/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                  <p><small class="text-muted">By. <a href="/coba?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/coba/{{ $post->slug }}" class="btn btn-primary">Read more..</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          {{-- pagination --}}
          <div class="d-flex justify-content-center">
         {{ $posts->links() }}
        </div>
        </div>
    @endsection
      
