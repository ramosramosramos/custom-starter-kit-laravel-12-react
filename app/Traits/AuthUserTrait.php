<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

trait AuthUserTrait
{
    /**
     * Get cached permissions for a user.
     *
     * @return Collection<string, string>
     */
    public function getCan(User $user): Collection
    {
        return cache()->remember(
            'can'.$user->id,
            now()->addHours(24),
            function () use ($user) {
                /** @var Collection<int, Permission> $permissions */
                $permissions = $user->getAllPermissions();

                return $permissions->mapWithKeys(
                    fn (Permission $permission): array => [$permission->name => $permission->name]
                );
            }
        );
    }

    /**
     * Forget cached permissions for a user.
     */
    public function forgetCan(User $user): void
    {
        cache()->forget('can'.$user->id);
    }

    /**
     * Get the currently authenticated user.
     */
    public function user(): ?User
    {
        return Auth::user();
    }
}
