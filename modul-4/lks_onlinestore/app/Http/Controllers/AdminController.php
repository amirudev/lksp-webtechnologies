<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $transactions = DB::table('transaksi')
        ->orderBy('transaksi.id', 'desc')
        ->get();

        return view('pages.admin.index', [
            'transactions' => $transactions
        ]);
    }
}
