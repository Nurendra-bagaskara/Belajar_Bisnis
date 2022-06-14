@extends('main')

@section('container')
<h1 class="text-center">{{ $nama }}</h1> 

<!-- fitur Search -->
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/produk">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="Search" value="{{ request('Search')}}">
                <button class="btn btn-primary" type="submit" ><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    
</div>

<div class="container">
    <div class="row ">
    @foreach ($produk as $p)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?{{ $p->harga }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->nama_produk }}</h5>
                        <p class="card-text">{{ $p->deskripsi }}</p>
                        <a href="#" class="btn btn-primary mr-2" data-target="#show_detail" data-toggle="modal" v-on:click="view_product(lp)"><i class="fas fa-eye"></i></a>
                            <router-link class="btn btn-primary mr-2" :to="{path:'/UploadProduct/'+lp.id_product}"><i class="fas fa-image fa-fw"></i></router-link>
                            <router-link class="btn btn-info mr-2" :to="{path:'/product/'+lp.id_product}"><i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i></router-link>
                            <button class="btn btn-danger mr-2" v-on:click="Hapus(lp.id_product)"><i class="fas fa-trash-alt fa-fw"></i></button>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
    <router-link class="btn btn-primary mr-2" :to="{path:'/product/AddProduct'}"> Add <i class="fas fa-plus fa-fw"></i></router-link>
    <router-link to="/keranjang" class="btn btn-success">view <i class="bi bi-cart4"></i></router-link>
</div>


@endsection

