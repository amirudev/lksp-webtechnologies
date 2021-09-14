<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    // use HasFactory;

    use Notifiable;

    protected $guard = 'customer';
    protected $table = 'customer';
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_lengkap', 'no_hp', 'alamat_lengkap', 'email'
    ];

    protected $hidden = [
        'password'
    ];

}
