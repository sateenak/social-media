@extends('layouts.latihan')
@section('body')
    

    <ul>
        @foreach ($categories as $category)
            <li><h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3></li>
        @endforeach
        
    </ul>
    @endsection