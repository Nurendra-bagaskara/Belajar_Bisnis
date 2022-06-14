
@extends('main')

@section('container')
<center> <h1>Description by category : {{ $category }}</h1> </center>
    @foreach ($deskripsi as $desk)
       <div class="container" mb-5>
            <article class="mb-3">
                <h2><a href="/deskripsi/{{ $desk->slug }}" class="text-decoration-none">{{ $desk->title }}</a></h2>
                <p>{{ $desk->excerpt }}</p>
            </article>
       </div>
    @endforeach
@endsection