<?php

declare(strict_types=1);

namespace App\Actions\Permission;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;
use Spatie\Permission\Models\Role;

final class UpdatePermissionAction
{
    use AsAction;

    /**
     * @param  User|Role  $model
     * @param  array<string>  $permissions
     * @return User|Role
     */
    public function handle(User|Role $model, array $permissions): User|Role
    {

        $model->syncPermissions(permissions: $permissions);

        return $model;
    }
}
