<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        // Mengambil semua penjualan dengan relasi pengguna dan produk
        $sales = Sale::with(['user', 'product'])->get(); 
        return view('sales.index', compact('sales')); // Menampilkan daftar penjualan
    }

    public function show(Sale $sale)
    {
        $sale->load(['user', 'product']); // Memuat relasi pengguna dan produk
        return view('sales.show', compact('sale')); // Menampilkan detail penjualan
    }
}
