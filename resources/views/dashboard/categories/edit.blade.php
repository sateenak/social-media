@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>
  <div class="col-lg-8">
  <form method="POST" action="/dashboard/categories/{{ $category->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Name</label>
      <input type="text" class="form-control @error('title')
          is-invalid
      @enderror " id="title" name="name" autocomplete="off" autofocus value="{{ old('name',$category->name) }}">
      @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug')
      is-invalid
  @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}">
  @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
  </form>
</div>
<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');
  title.addEventListener('change', function halo(){
    fetch('/dashboard/categories/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data=>slug.value= data.slug)
  });
  document.addEventListener('trix-file-accept', function(e){
    e.prefentDefault();
  });
  function previewImage(){
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');
  imgPreview.style.display = 'block';
  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);
  oFReader.onload = function(oFREvent){
    imgPreview.src = oFREvent.target.result;
  }
  }
</script>
@endsection