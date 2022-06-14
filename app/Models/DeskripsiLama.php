<?php

namespace App\Models;


class Deskripsi 
{
    private static $tentang_kami = [
        [
            "title" => "What Is Erigo",
            "slug" => "what-is-erigo",
            "author" => "Basunandra Dewangga",
            "body" => "ERIGO adalah fashion brand yang didirikan Muhammad Sadad pada tahun 2011 lalu. Brand lokal ini berfokus pada streetwear fashion yang dapat digunakan pria dan wanita di Indonesia maupun global. ERIGO berhasil menjadi lokal brand yang laris di pasaran bahkan mulai mendunia."
        ],
        [
            "title" => "Erigo Center",
            "slug" => "erigo-center",
            "author" => "Rendra Basunandra",
            "body" => "Erigo adalah teman travelling anak muda Indonesia yang memberikan rasa nyaman dan  membuat mereka percaya diri dalam perjalanan.  Travelling bagi brand ini adalah melakukan semua hal yang kita suka. Mulai dari menjelajah  tempat-tempat wisata, tradisional, pergi bersama teman, hingga berbelanja.  Erigo menghadirkan produk yang membuat orang yang memakai akan merasa nyaman,  selalu update dengan trend fashion, dan bisa didapatkan dengan harga yang terjangkau.  Target pasar Erigo adalah anak-anak muda yang mencari sesuatu yang trendy dan Erigo  membuat mereka merasa spesial.  Erigo memiliki tujuan untuk membawa brand produk lokal ke kancah Internasional agar  nantinya merek pakaian asal Indonesia bisa bersaing di pasar global."
        ],
    ];

    
    public static function all(){
        return collect(self::$tentang_kami);
    }
    public static function detail($slug)
    {
        $deskripsi = static::all();
        return $deskripsi->firstwhere('slug', $slug);
    }
}
