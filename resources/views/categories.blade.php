
@extends('main')

@section('container')
<center> <h1>Description by categories</h1> </center>
    @foreach ($categories as $category)

    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
        </li>
    </ul>

    @endforeach
@endsection