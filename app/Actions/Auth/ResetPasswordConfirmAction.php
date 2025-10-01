<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;

final class ResetPasswordConfirmAction
{
    use AsAction;

    public function handle(): void
    {
        request()->session()->put('auth.password_confirmed_at', null);
    }
}
