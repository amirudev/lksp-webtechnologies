<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;
use App\Models\TransaksiDetail;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_id', 'tanggal', 'kode_transaksi'
    ];

    public function transaksiDetail(){
        return $this->hasMany(TransaksiDetail::class, 'transaksi_id', 'id')
        ->join('produk', 'produk.id', '=', 'transaksi_detail.produk_id');
    }

    public function customer(){
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    // public function transaksiDetailProdukCustomer(){
    //     return $this->hasMany(TransaksiDetail::class, 'transaksi_id', 'id')
    //     ->join('produk', 'transaksi_detail.produk_id', '=', 'produk.id');
    // }
}
