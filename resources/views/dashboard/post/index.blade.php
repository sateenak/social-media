@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
 {{ session('success') }}
</div>
@endif
<div class="table-responsive col-lg-8">
  <a href="/dashboard/posting/create" class="btn btn-success">Create New Post</a>
    <table class="table table-striped table-sm col-lg-5">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posting as $post)
              
         
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post['title'] }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
              <a href="/dashboard/posting/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/posting/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/posting/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection