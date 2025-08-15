<?php

namespace App\Actions\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Hash;
class UpdateUserPasswordAction
{
    use AsAction;

    public function handle(User $user, string $password): void
    {
        $user->update([
            'password' => Hash::make((string) $password),
        ]);
    }
}
