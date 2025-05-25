@extends('layouts.main')

@section('container')
<h1 class="mt-4">Halaman About</h1>

<p>{{ $name }}</p>
<p>{{ $email }}</p>
<img src="img/{{ $profile }}" height="300px" width="300px">
@endsection

