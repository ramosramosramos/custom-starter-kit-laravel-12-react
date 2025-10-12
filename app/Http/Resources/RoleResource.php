<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Enum\RoleEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

        return [
            'id' => $role->id,
            'name' => $role->name,
            'created_at' => carbon()->parse($role->created_at)->diffForHumans(),
            'can_be' => [
                'updated' => $role->name !== RoleEnum::SUPER_ADMIN->value,
                'deleted' => $role->name !== RoleEnum::SUPER_ADMIN->value,
            ],
            'permissions'=>collect($role->permissions)->map(function($permission,$key){
                /**
                 * @var Permission $permission
                 */
                return [
                    'id'=>$permission->id,
                    'name'=>$permission->name,
                ];
            })
        ];
    }
}
