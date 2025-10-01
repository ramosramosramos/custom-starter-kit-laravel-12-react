<?php

namespace App\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;

class ResetPasswordConfirmAction
{
    use AsAction;

    public function handle(): void
    {
        request()->session()->put('auth.password_confirmed_at', null);
    }
}
