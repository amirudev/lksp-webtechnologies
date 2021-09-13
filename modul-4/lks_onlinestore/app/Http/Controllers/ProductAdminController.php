<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductAdminController extends Controller
{
    public function index(){
        return view('pages.admin.product.index');
    }

    public function tambah(){
        $categories = DB::table('kategori')->get();
        return view('pages.admin.product.tambah', [
            'categories' => $categories,
        ]);
    }
    public function create(Request $request){
        $validation = $request->validate([
            'nama_produk' => ['required'],
            'kategori_id' => ['required'],
            'deskripsi' => ['required'],
            'harga' => ['required'],
        ]);

        if(!$validation){
            return back();
        }

        $product = new Produk($request->all());
        $product->gambar = 'test.png';

        if(!$product->save()){
            return back();
        }

        return redirect('/admin');
    }
}
