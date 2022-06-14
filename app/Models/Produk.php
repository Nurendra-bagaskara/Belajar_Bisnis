<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    //untuk memberikan filter ketika disearch sesuai namanya maka akan muncul/get/read
    public function scopeFilt($p){
        if(request('Search')){
            return $p->where('nama_produk', 'like', '%' . request('Search'). '%');
        } 
    }

    protected $table = 'produks';
    public $timestamps = true;

    protected $fillable = ['nama_produk','deskripsi','harga','foto_produk'];
}
