<?php

namespace App\Http\Shoes\Presentation\Controller;

use App\Http\Controllers\Controller;
use App\Http\Shoes\Application\Service\CreateForm\CreateFormRequest;
use App\Http\Shoes\Application\Service\CreateForm\CreateFormService;
use App\Http\Shoes\Application\Service\UpdateForm\UpdateFormRequest;
use App\Http\Shoes\Application\Service\UpdateForm\UpdateFormService;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct(
        private CreateFormService $create_Form_service,
        private UpdateFormService $update_Form_service
    )
    {
    }

    public function createForm(Request $request){
        $request = new CreateFormRequest(
            $request->input('name'),
            $request->input('brand'),
            $request->input('size'),
            $request->input('region'),
            $request->input('picture'),
        );
        return $this->executeService($this->create_Form_service, $request);
    }
    public function updateForm(Request $request){
        $request = new UpdateFormRequest(
            $request->input('id'),
            $request->input('name'),
            $request->input('brand'),
            $request->input('size'),
            $request->input('region'),
            $request->input('picture'),
        );

        return $this->executeService($this->update_Form_service, $request);
    }
}
