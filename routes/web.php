<?php

declare(strict_types=1);

use App\Http\Controllers\BackupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', fn () => Inertia::render('dashboard'))->name('dashboard');

    Route::get('backups', [BackupController::class, 'index'])->name('backups.index');
    Route::post('backups/generate', [BackupController::class, 'generate'])->name('backups.generate');
    Route::delete('backups/destroy', [BackupController::class, 'destroy'])->name('backups.destroy');
    Route::get('backups/download', [BackupController::class, 'download'])->name('backups.download');

    Route::resource('users', UserController::class)->except(['show']);
    Route::get('users/{user}/edit-permission', [UserController::class, 'editPermission'])->name('users.editPermission');
    Route::put('users/{user}/update-permission', [UserController::class, 'updatePermission'])->name('users.updatePermission');

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
