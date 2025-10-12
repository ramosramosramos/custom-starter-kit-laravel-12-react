<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Enum\RoleEnum;
use App\Enum\PermissionEnum;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Resources\Json\JsonResource;

final class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /**
         * @var Role $role
         */
        $role = $this->resource;
        $exist = in_array($role->name, array_column(RoleEnum::cases(), 'value'));
        return [
            'id' => $role->id,
            'name' => $role->name,
            'created_at' => carbon()->parse($role->created_at)->diffForHumans(),
            'can_be' => [
                'permission_updated' => $role->name !== RoleEnum::SUPER_ADMIN->value ,
                'updated' => $role->name !== RoleEnum::SUPER_ADMIN->value &&
                    !$exist,
                'deleted' => $role->name !== RoleEnum::SUPER_ADMIN->value && !$exist
                ,
            ],
            'permissions' => collect($role->permissions)->map(function ($permission, $key) {
                /**
                 * @var Permission $permission
                 */
                return [
                    'id' => $permission->id,
                    'name' => $permission->name,
                ];
            })
        ];
    }
}
