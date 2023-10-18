<?php

use App\Http\Shoes\Presentation\Controller\FormController;
use Illuminate\Support\Facades\Route;

Route::prefix('Form')->group(function (){
    Route::post('create', [FormController::class, 'createForm']);
    Route::post('update', [FormController::class, 'updateForm']);
});
