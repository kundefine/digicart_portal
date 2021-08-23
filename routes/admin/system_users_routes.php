<?php


use App\Http\Controllers\Users\Admin\SystemUserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'systemx/system_users',
    'middleware' => 'auth:admin'
], function(){

    Route::get('/role', [SystemUserController::class, 'role'])->name('role');
    Route::post('/role', [SystemUserController::class, 'roleStore'])->name('roleStore');
    Route::get('/role/create', [SystemUserController::class, 'roleCreate'])->name('roleCreate');
    Route::get('/role/edit/{role}', [SystemUserController::class, 'roleEdit'])->name('roleEdit');
    Route::patch('/role/update/{role}', [SystemUserController::class, 'roleUpdate'])->name('roleUpdate');


    Route::get('/', [SystemUserController::class, 'index'])->name('adminAll');
    Route::post('/', [SystemUserController::class, 'adminStore'])->name('adminStore');
    Route::get('/create', [SystemUserController::class, 'adminCreate'])->name('adminCreate');
    Route::get('/{admin}', [SystemUserController::class, 'adminShow'])->name('adminShow');
    Route::patch('/{admin}/role_update', [SystemUserController::class, 'adminRoleUpdate'])->name('adminRoleUpdate');
    Route::patch('/{admin}/password_update', [SystemUserController::class, 'adminPasswordUpdate'])->name('adminPasswordUpdate');
});