<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Produk extends Model
{
    protected $fillable = ['kategori_id', 'nama', 'harga', 'stok'];

    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class);
    }

    public function detailPesanan(): HasMany
    {
        return $this->hasMany(DetailPesanan::class, 'produk_id');
    }

}
