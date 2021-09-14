<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    protected $table = 'transaksi_detail';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'produk_id', 'jumlah', 'transaksi_id'
    ];

    // public function transaksi(){
    //     return $this->belongsTo(Transaksi::class, 'transaksi_id');
    // }
}
