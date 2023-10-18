<?php

namespace App\Http\Shoes\Application\Service\CreateForm;

class CreateFormRequest
{
    public function __construct(
        private string $name,
        private string $brand,
        private string $size,
        private string $region,
        private string $picture,
    )
    {
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
