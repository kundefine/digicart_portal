<?php


use App\Http\Controllers\Users\Admin\FormGeneratorController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'systemx/form_generator',
    'middleware' => 'auth:admin'
], function(){
    Route::get('/', [FormGeneratorController::class, 'formGeneratorIndex'])->name('formGeneratorIndex');
    Route::post('/', [FormGeneratorController::class, 'formGeneratorStore'])->name('formGeneratorStore');
    Route::get('/create', [FormGeneratorController::class, 'formGeneratorCreate'])->name('formGeneratorCreate');
});

