@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-3">
    <img src="https://picsum.photos/1200/400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small>By <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <h6><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">Read More</a>
        </div>
    </div>
@else
    <p class="text-center fs-4">No post found.</p> 
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                 <img src="https://picsum.photos/500/500?{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title"> <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <p>
                        <small>By <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More..</a>
                </div>
            </div>
        </div>
            
        @endforeach
        
    </div>
</div>
@endsection