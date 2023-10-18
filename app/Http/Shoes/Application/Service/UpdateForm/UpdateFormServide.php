<?php

namespace App\Http\Shoes\Application\Service\UpdateForm;

use App\Http\Shoes\Domain\Models\Form;
use App\Http\Shoes\Domain\Service\Repository\FormRepositoryInterface;

class UpdateFormService
{
    public function __construct(
        private FormRepositoryInterface $Form_repository
    )
    {
    }

    public function execute(UpdateFormRequest $request){
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
