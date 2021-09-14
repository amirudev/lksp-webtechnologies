<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Produk;
use App\Models\Kategori;

class ProductAdminController extends Controller
{
    public function index(){
        $products = DB::table('produk')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->get();

        return view('pages.admin.product.index', [
            'products' => $products
        ]);
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
            'gambar' => ['required', 'mimes:jpg,png', 'max:2048']
        ]);

        if(!$validation){
            return back();
        }

        $product = new Produk($request->all());
        $product->gambar = time() . '.' . $request->gambar->extension();

        if(!$product->save()){
            return back();
        }

        $request->gambar->move(public_path('uploads'), $product->gambar);

        return redirect('/admin');
    }

    public function tambahKategori(){
        return view('pages.admin.product.tambah-kategori');
    }
    public function createKategori(Request $request){
        $validation = $request->validate([
            'nama_kategori' => ['required'],
        ]);

        if(!$validation){
            return back();
        }

        $product = new Kategori($request->all());

        if(!$product->save()){
            return back();
        }

        return redirect('/admin');
    }

    public function delete(Request $request, $product_id){
        DB::table('produk')->where('id', $product_id)->delete();

        return redirect('/admin/product');
    }
}
