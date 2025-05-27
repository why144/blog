@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <article class="mb-5">
                    <h2>{{ $post->title }}</h2>
                    <p>By <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    <p> {!! $post->body !!} </p>
                    <p><a href="/blog" class="btn btn-success mb-3">Kembali ke daftar post</a></p>
                </article>
                
            </div>
        </div>
    </div>
   
@endsection


