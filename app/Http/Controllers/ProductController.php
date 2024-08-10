<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create'); // Menampilkan form untuk membuat produk baru
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product')); // Menampilkan form untuk mengedit produk
    }

    public function buyForm(Product $product)
    {
        return view('products.buy', compact('product')); // Menampilkan form untuk membeli produk
    }

    public function index()
    {
        $products = Product::all(); // Mengambil semua produk
        return view('products.index', compact('products')); // Menampilkan daftar produk
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'kodeBarang' => 'required|unique:products', // Kode barang wajib dan unik
            'namaProduct' => 'required', // Nama produk wajib
            'quantity' => 'required|integer', // Jumlah wajib dan harus integer
            'harga' => 'required|numeric', // Harga wajib dan harus numerik
        ]);

        Product::create($request->all()); // Membuat produk baru
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.'); // Mengarahkan ke daftar produk dengan pesan sukses
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product')); // Menampilkan detail produk
    }

    public function update(Request $request, Product $product)
    {
        // Validasi inputan
        $request->validate([
            'namaProduct' => 'required', // Nama produk wajib
            'quantity' => 'required|integer', // Jumlah wajib dan harus integer
            'harga' => 'required|numeric', // Harga wajib dan harus numerik
        ]);

        $product->update($request->all()); // Memperbarui produk
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.'); // Mengarahkan ke daftar produk dengan pesan sukses
    }

    public function destroy(Product $product)
    {
        $product->delete(); // Menghapus produk
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.'); // Mengarahkan ke daftar produk dengan pesan sukses
    }

    public function buy(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'kodeBarang' => 'required', // Kode barang wajib
            'quantity' => 'required|integer|min:1', // Jumlah wajib, harus integer, dan minimal 1
        ]);

        return DB::transaction(function () use ($request) {
            $product = Product::lockForUpdate()->where('kodeBarang', $request->kodeBarang)->first(); // Mengunci produk untuk pembaruan
            if (!$product || $product->quantity < $request->quantity) {
                return redirect()->back()->withErrors(['Stok tidak mencukupi']); // Kembali dengan pesan error jika stok tidak mencukupi
            }

            $product->quantity -= $request->quantity; // Kurangi stok produk
            $product->save(); // Simpan perubahan stok

            // Buat catatan penjualan
            Sale::create([
                'tanggal' => now(), // Waktu penjualan
                'user_id' => auth()->id(), // ID pengguna yang melakukan pembelian
                'kodeBarang' => $product->kodeBarang, // Kode barang yang dibeli
                'quantityTerjual' => $request->quantity, // Jumlah yang terjual
            ]);

            return redirect()->route('products.index')->with('success', 'Pembelian berhasil.'); // Mengarahkan ke daftar produk dengan pesan sukses
        });
    }
}
