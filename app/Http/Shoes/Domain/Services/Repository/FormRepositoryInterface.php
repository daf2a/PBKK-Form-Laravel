<?php

namespace App\Http\Shoes\Domain\Service\Repository;

use App\Http\Shoes\Domain\Models\Form;

interface FormRepositoryInterface
{
    public function persist(Form $Form);
    // public function getById(int $Form_id): ?Form;

}
