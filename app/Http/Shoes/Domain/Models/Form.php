<?php

namespace App\Http\Shoes\Domain\Models;

class Form
{
    public function __construct(
        private ?int $id,
        private string $name,
        private string $brand,
        private string $size,
        private string $region,
        private string $picture,
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getPicture(): string
    {
        return $this->picture;
    }

}
