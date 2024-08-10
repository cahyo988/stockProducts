<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodeBarang',
        'namaProduct',
        'tanggal',
        'quantity',
        'harga',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'product_user', 'product_id', 'user_id');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class, 'kodeBarang'); // Menghubungkan produk dengan penjualan berdasarkan kodeBarang
    }
}
