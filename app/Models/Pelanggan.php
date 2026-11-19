<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    protected $fillable = ['nama', 'email', 'address,'];

    public function pelanggan(): HasMany
    {
        return $this->hasMany(Pesanan::class, 'pelanggan_id');
    }
}
