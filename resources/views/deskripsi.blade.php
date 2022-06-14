
@extends('main')

@section('container')
<h1 class="text-center mb-3">{{ $nama }}</h1>

<!-- fitur Search -->
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/deskripsi">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="Search" value="{{ request('Search')}}">
                <button class="btn btn-primary" type="submit" ><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
</div>

@foreach ($deskripsi as $desk)
    <div class="container">
        <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/1500x400?{{ $desk->category->name }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-dark">{{ $desk->title }}</h3>
            
            <p><small> Category <a class="text-decoration-none", href="/categories/{{ $desk->category->slug }}">{{ $desk->category->name }}</a> {{ $desk->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $desk->excerpt }}</p>
            <a href="/deskripsi/{{ $desk->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
        </div>
    </div>    
        @endforeach
        </div>
    </div>
@endsection