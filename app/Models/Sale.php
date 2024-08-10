<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'user_id',
        'kodeBarang',
        'quantityTerjual',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'kodeBarang', 'kodeBarang'); // Menghubungkan penjualan dengan produk berdasarkan kodeBarang
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // Menghubungkan penjualan dengan pengguna
    }
}

