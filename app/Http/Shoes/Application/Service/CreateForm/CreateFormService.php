<?php

namespace App\Http\Shoes\Application\Service\CreateForm;

use App\Http\Shoes\Domain\Models\Form;
use App\Http\Shoes\Domain\Service\Repository\FormRepositoryInterface;

class CreateFormService
{
    public function __construct(
        private FormRepositoryInterface $Form_repository
    )
    {
    }

    public function execute(CreateFormRequest $request){
        $Form = new Form(
            null,
            $request->getName(),
            $request->getBrand(),
            $request->getSize(),
            $request->getRegion(),
            $request->getPicture(),
        );

        $this->Form_repository->persist($Form);
    }
}
