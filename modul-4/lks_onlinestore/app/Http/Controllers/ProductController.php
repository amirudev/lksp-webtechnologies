<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Transaksi;
use App\Models\TransaksiDetail;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('produk')
        ->orderBy('id', 'desc')
        ->get();

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
            array_push($productsSession, $product_id);
            $request->session()->put('products', $productsSession);
        }


        return redirect('/product/cart');
    }

    public function cart(Request $request){
        $productsSession = $request->session()->get('products');

        if($productsSession == null){
            $productsSession = [];
        }

        $products = DB::table('produk')
        ->whereIn('produk.id', $productsSession)
        ->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
        ->get();

        return view('pages.product.cart', [
            'products' => $products,
        ]);
    }

    public function deletecart(Request $request){
        $request->session()->remove('products');

        return redirect('/');
    }

    public function checkout(Request $request){
        $todayTotalOrder = DB::table('transaksi')->where('tanggal', date('Ymd'))->count();

        if(!Auth::guard('customer')->id()){
            return redirect('/login');
        }

        $transaction = new Transaksi([
            'customer_id' => Auth::guard('customer')->id(),
            'tanggal' => date('Ymd'),
            'kode_transaksi' => 'INV/' . date('Ymd') . str_pad($todayTotalOrder, 2, "0", STR_PAD_LEFT),
        ]);

        $transaction->save();

        $productsSession = $request->session()->get('products');
        foreach ($productsSession as $key => $product) {
            $product = new TransaksiDetail([
                'produk_id' => $product,
                'jumlah' => 1,
                'transaksi_id' => $transaction->id,
            ]);

            $product->save();
        }

        $request->session()->remove('products');

        return redirect("/product/summary/$transaction->kode_transaksi");
    }

    public function summary(Request $request, $kode_transaksi){
        $transaction = Transaksi::where('transaksi.kode_transaksi', "INV/$kode_transaksi")
        ->with('transaksiDetail', 'customer')
        ->first();

        return view('pages.product.summary', [
            'transaction' => $transaction
        ]);
    }

    public function history(){
        $transactions = DB::table('transaksi')
        ->where('customer_id', Auth::guard('customer')->id())
        ->orderBy('transaksi.id', 'desc')
        ->get();

        return view('pages.product.history', [
            'transactions' => $transactions
        ]);
    }
}
