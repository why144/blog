@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white mb-3">
                    <img src="https://picsum.photos/300/300?{{ $category->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $category->name }}</h5>
                    </div>
                </div>
            </div>
         @endforeach
    </div>
</div>
@endsection