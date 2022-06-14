@extends('main')

@section('container')
<center><h1>{{ $opening }}</h1>
<img src="img/{{ $image }}" alt="{{ $brand }}" width="200">
<h5>{{ $brand }}</h5>
<p>{{ $desk }}</p>
</center>
@endsection


