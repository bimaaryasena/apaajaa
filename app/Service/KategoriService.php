<?php

namespace App\Services;

use App\Exceptions\NotFoundException;
use App\Models\Kategori;
use App\Repositories\Interfaces\KategoriRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class KategoriService
{
    public function __construct(
        private readonly KategoriRepositoryInterface $categoryRepository,
    ) {
    }

    public function getAll(): Collection
    {
        return $this->categoryRepository->all();
    }

    public function getById(int $id): Kategori
    {
        $category = $this->categoryRepository->findById($id);

        if ($category === null) {
            throw new NotFoundException('Kategori', $id);
        }

        return $category;
    }

    public function create(array $data): Kategori
    {
        return $this->categoryRepository->create($data);
    }

    public function update(int $id, array $data): Kategori
    {
        $category = $this->getById($id);

        return $this->categoryRepository->update($category, $data);
    }

    public function delete(int $id): void
    {
        $category = $this->getById($id);

        $this->categoryRepository->delete($category);
    }
}
