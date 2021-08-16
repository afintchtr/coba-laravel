@extends('layouts.main')

@section('container')
  <article>
      <h2>{{ $post->title }}</h2><br>
      <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
      {!! $post->body !!}
  </article>
  <br>
  <a href="/posts" class="d-block mt-1 text-decoration-none">Back to Posts</a>
    
@endsection