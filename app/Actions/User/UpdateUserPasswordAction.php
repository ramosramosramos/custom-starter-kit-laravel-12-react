<?php

declare(strict_types=1);

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUserPasswordAction
{
    use AsAction;

    /**
     * Summary of handle
     *
     * @param  \App\Models\User  $user
     * @param  string  $password
     * @return void
     */
    public function handle(User $user, string $password): void
    {
        $user->update([
            'password' => Hash::make((string) $password),
        ]);
    }
}
