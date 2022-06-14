<?php

use App\Models\Category;
use App\Models\Deskripsi;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeskripsiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main',["title" => "Main"]);
});

Route::get('/home', function () {
    return view('home',[
        "title"     => "Home",
        "opening"   => "SELAMAT DATANG",
        "image"     => "erigo.jpg",
        "brand"     => "ERIGO",
        "desk"      => "Berani Tampil Dengan Fashion Masa Kini"
    ]);
});

Route::get('/produk', function () {
    return view('produk',["title" => "Produk"]);
});


Route::get('/deskripsi', [DeskripsiController::class, 'show']);
Route::get('/produk', [ProdukController::class, 'show']);

// single desk
Route::get('deskripsi/{post:slug}', [DeskripsiController::class, 'showDetail']);

//Route untuk kembali menampilkan semua kategori
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'List Categories',
        'categories' => Category::all()
    ]);
});

//Raute yang akan mengarah ke categories
Route::get('/categories/{category:slug}', function (Category $category){
    return view('category', [
        'title' => $category->name,
        'deskripsi' => $category->deskripsi,
        'category' => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);