<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanan";
    protected $fillable = [
        "pesanan",
        "quantity",
        "totalharga",
        "namapembeli",
        "email",
        "kabupaten",
        "kecamatan",
        "alamatlengkap",
        "tipepembayaran",
        "catatan",
    ];
}
