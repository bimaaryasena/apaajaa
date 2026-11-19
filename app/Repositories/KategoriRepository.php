<?php

namespace App\Repositories;

use App\Models\Kategori;
use App\Repositories\Interfaces\KategoriRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class KategoriRepository implements KategoriRepositoryInterface
{
    public function all(): Collection
    {
        return Kategori::all();
    }

    public function findById(int $id): ?Kategori
    {
        return Kategori::find($id);
    }

    public function create(array $data): Kategori
    {
        return Kategori::create($data);
    }

    public function update(Kategori $kategori, array $data): Kategori
    {
        return $kategori;
    }

    public function delete(Kategori $kategori): bool
    {
        return $kategori->delete();
    }
}
