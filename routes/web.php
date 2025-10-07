<?php

declare(strict_types=1);

use App\Enum\RoleEnum;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', fn () => Inertia::render('dashboard'))->name('dashboard');

    Route::get('backups', [BackupController::class, 'index'])->name('backups.index');
    Route::post('backups/generate', [BackupController::class, 'generate'])->name('backups.generate');
    Route::get('backups/download', [BackupController::class, 'download'])->name('backups.download');
    Route::delete('backups/destroy', [BackupController::class, 'destroy'])->name('backups.destroy')
        ->middleware('role.password.confirm:'.RoleEnum::SUPER_ADMIN->value);
    // Route::delete('backups/destroy', [BackupController::class, 'destroy'])->name('backups.destroy')->middleware('password.confirm');

    Route::resource('users', UserController::class)->except(['show'])
        ->middlewareFor(['destroy'], 'password.confirm');
    Route::get('users/{user}/edit-permission', [UserController::class, 'editPermission'])->name('users.editPermission');
    Route::put('users/{user}/update-permission', [UserController::class, 'updatePermission'])->name('users.updatePermission');

    Route::apiResource('roles', RoleController::class)
        ->middlewareFor(['destroy'], 'role.password.confirm:'.RoleEnum::SUPER_ADMIN->value);
    Route::put('roles/{role}/update-permission', [RoleController::class, 'updatePermission'])->name('roles.updatePermission');

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
