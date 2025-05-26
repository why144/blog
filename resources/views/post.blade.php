@extends('layouts.main')

@section('container')
    <article class="mb-5">
        
        <h2>{{ $post->title }}</h2>
        <p>By <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
         <p> {!! $post->body !!} </p>
        <p><a href="/blog" class="btn btn-success mb-3">Kembali ke daftar post</a></p>
    </article>
@endsection


{{-- nitip
Post::create([
    'title' => 'Judul Post Ketiga',
    'category_id' => 2,
    'excerpt' => 'lorem ipsum ketiga',
    'slug' => 'judul-post-ketiga', 
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati vel neque ratione nulla libero provident repellendus, nihil dolor quisquam officia ab esse dolore tenetur voluptates, incidunt dicta molestiae voluptatem in amet ipsum commodi accusamus. Recusandae qui mollitia officiis sit totam perspiciatis odit nesciunt repudiandae error quibusdam, debitis, eius quod asperiores atque non, autem adipisci rerum dolore sint nulla! Atque, ab?</p> <p>Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
]); 

Category::create([
'name' => 'Desain Grafis',
'slug' => 'desain-grafis',
]);


]);
])--}}