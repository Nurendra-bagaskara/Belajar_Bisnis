<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deskripsi;

class DeskripsiController extends Controller
{
    public function show()
    {   


        // dd(request('Search'));
        return view('deskripsi',[
            "title" => "Deskripsi",
            "nama"  => "Deskripsi",
            // untuk menampilkan data terbaru
            "deskripsi" => Deskripsi::latest()->filter()->get()
        ]);
    }

    public function showDetail(Deskripsi $post)
    {
        return view('desk', [
            "title" => "single",
            "desk" => $post
        ]);
    }
}
