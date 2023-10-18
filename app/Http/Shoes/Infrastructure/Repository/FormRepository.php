<?php

namespace App\Http\Shoes\Infrastructure\Repository;

use App\Http\Shoes\Domain\Models\Form;
use App\Http\Shoes\Domain\Service\Repository\FormRepositoryInterface;
use Illuminate\Support\Facades\DB;

class FormRepository implements FormRepositoryInterface
{
    public function persist(Form $Form)
    {
        $data = $this->createPayload($Form);
        DB::table('Forms')->upsert(
            $data,
            'id'
        );
    }

    // public function getById(int $Form_id): ?Form
    // {
    //     // TODO: Implement getById() method.
    // }

    private function createPayload(Form $Form)
    {
        return [
            'id' => $Form->getId(),
            'name' => $Form->getName(),
            'brand' => $Form->getBrand(),
            'size' => $Form->getSize(),
            'region' => $Form->getRegion(),
            'picture' => $Form->getPicture(),
        ];
    }
}
