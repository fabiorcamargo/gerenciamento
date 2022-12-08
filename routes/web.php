<?php

use App\Http\Controllers\{
    CademiController,
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Asaas\AsaasController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    Route::get('/users/asaas/index', [AsaasController::class, 'asaascliente'])->name('asaas.index');

 
    Route::get('/users/{id}/cademi/create', [CademiController::class, 'create'])->name('cademi.create');
    Route::post('/users/{id}/cademi', [CademiController::class, 'store'])->name('cademi.store');


    
    
});

Route::get('/', function () {
    return view('auth.register');
});

require __DIR__.'/auth.php';
