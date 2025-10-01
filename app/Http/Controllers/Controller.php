<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Auth\ResetPasswordConfirmAction;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller
{
    use AuthorizesRequests;

    final public function resetPasswordConfirm(): void
    {
        app(ResetPasswordConfirmAction::class)->handle();
    }
}
