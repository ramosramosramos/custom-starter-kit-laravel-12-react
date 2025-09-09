<?php

declare(strict_types=1);

namespace App\Http\Resources\User;

use App\Enum\RoleEnum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\Permission\Models\Permission;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $this->withoutWrapping();
        /**
         * @var User $user
         */
        $user = $this->resource;

        $role = $user->roles->first()->name ?? 'none';

        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $role,
            'permissions' => collect($user->permissions)->map(function (Permission $permission) {
                return [
                    'id' => $permission->id,
                    'name' => $permission->name,
                ];
            }),
            'can_be' => [
                'updated' => $role !== RoleEnum::SUPER_ADMIN->value,
                'deleted' => $role !== RoleEnum::SUPER_ADMIN->value,
            ],
        ];
    }
}
