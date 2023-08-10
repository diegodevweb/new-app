<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::post('/supports/create', [SupportController::class, 'store'])->name('supports.store');

Route::delete('/supports/{id}', [SupportController::class, 'delete'])->name('supports.delete');
