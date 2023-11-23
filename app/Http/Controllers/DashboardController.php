<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Pemesanan;
use App\Models\Produk;
use App\Models\User;
use App\Models\UserPembeli;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalproduk = Produk::count();
        $totaljasa = Jasa::count();
        $totaluser = User::count();
        $totalpemesanan = Pemesanan::count();
        $totaluserpembeli = UserPembeli::count();
        return view('index', compact('totalproduk', 'totaljasa', 'totaluser', 'totalpemesanan', 'totaluserpembeli'));
    }
}
