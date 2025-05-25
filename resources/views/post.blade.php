@extends('layouts.main')

@section('container')
    <article class="mb-5">
        
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        <a href="/blog" class="btn btn-success mb-3">Kembali ke daftar post</a>
    </article>
@endsection