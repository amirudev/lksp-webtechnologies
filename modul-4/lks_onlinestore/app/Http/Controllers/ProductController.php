<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Produk;
use App\Models\Transaksi;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('produk')->get();

        return view('pages.product.index', [
            'products' => $products,
        ]);
    }

    public function show($product_id){
        $product = DB::table('produk')->where('id', $product_id)->first();

        return view('pages.product.show', [
            'product' => $product,
        ]);
    }

    public function add(Request $request, $product_id){
        $productsSession = $request->session()->get('products');

        if(is_null($productsSession)){
            $request->session()->put('products', [$product_id]);
        } else {
            $request->session()->put('products', array_push($productsSession, $product_id));
        }

        return redirect('/product/cart');
    }

    public function cart(Request $request){
        $productsSession = $request->session()->get('products');

        if($productsSession == null){
            $productsSession = [];
        }

        $products = DB::table('produk')->whereIn('produk.id', $productsSession)->join('kategori', 'produk.kategori_id', '=', 'kategori.id')->get();

        return view('pages.product.cart', [
            'products' => $products,
        ]);
    }

    public function checkout(Request $request){
        $todayTotalOrder = DB::table('transaksi')->where('tanggal', date('Ymd'))->count();
        $transaction = new Transaksi([
            'customer_id' => Auth::guard('customer')->id(),
            'tanggal' => date('Ymd'),
            'kode_transaksi' => 'INV/' . date('Ymd') . str_pad($todayTotalOrder, 3)
        ]);

        $transaction->save();

        echo $transaction;

        // return redirect('/');
    }
}
