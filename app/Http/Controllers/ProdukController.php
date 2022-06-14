<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

    public function show(Request $request)
    {
        return view('produk',[
            "title" => "Produk",
            "nama"  => "LIST PRODUK",
            "foto"  => Produk::where('foto_produk', '=', $request->foto_produk)->get(),
            "produk" => Produk::latest()->filt()->get()
        ]);
    }

    public function upload(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'foto_produk' => 'required|image|mimes:jpeg,png,jpg |max:2048'
            ]
        );

        if($validator -> fails()){
            return Response() -> json($validator->errors());
        }
        //define nama foto yang akan di upload
        $namaFoto = time().".".$request->foto_produk->extension();
        //proses upload nya
        $request->foto_produk->move(public_path('foto_produk'), $namaFoto);

        $update = DB::table('produks')->where('id_produk', '=', $id)->update([
            'foto_produk' => $namaFoto
           
        ]);

        $data = Produk::where('nama_produk', '=', $id)->get();
        if($update){
            return Response() -> json([
                'status' => 1,
                'message' => 'Succes create new data!',
                'data' => $data
            ]); 
        }
        else{
            return Response() -> json([
                'status' => 0,
                'message' => 'Failed create data!'
            ]);
        }

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'nama_produk' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
            ]
        );

        if($validator -> fails()){
            return Response() -> json($validator->errors());
        }

        $store = Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        $data = Produk::where('nama_produk', '=', $request->nama_produk)->get();
        if($store){
            return Response() -> json([
                'status' => 1,
                'message' => 'Succes create new data!',
                'data' => $data
            ]); 
        }
        else{
            return Response() -> json([
                'status' => 0,
                'message' => 'Failed create data!'
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'nama_produk' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
            ]
        );

        if($validator -> fails()){
            return Response() -> json($validator->errors());
        }

        $update = DB::table('produks')->where('id_produk', '=', $id)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        $data = Produk::where('nama_produk', '=', $id)->get();
        if($update){
            return Response() -> json([
                'status' => 1,
                'message' => 'Succes Update new data!',
                'data' => $data
            ]); 
        }
        else{
            return Response() -> json([
                'status' => 0,
                'message' => 'Failed Update data!'
            ]);
        }

    }

        //delete data start
        public function delete($id){
            $delete=DB::table('produks')
            ->where('id_produk', '=', $id)
            ->delete();
    
            if($delete){
                return Response() -> json([
                    'status' => 1,
                    'message' => 'Succes delete data!'
            ]);
            } else {
                return Response() -> json([
                    'status' => 0,
                    'message' => 'Failed delete data!'
            ]);
            }
    
        }
        //delete data end
}
