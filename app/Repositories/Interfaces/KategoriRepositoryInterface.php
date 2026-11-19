<?php

namespace App\Repositories\Interfaces;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Collection;

interface KategoriRepositoryInterface
{
    public function all(): Collection;

    public function findById(int $id): ?Kategori;

    public function create(array $data): Kategori;

    public function update(Kategori $kategori, array $data): Kategori;

    public function delete(Kategori $kategori): bool;
}
