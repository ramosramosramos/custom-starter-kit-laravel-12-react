<?php

declare(strict_types=1);

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    /**
     * @return LengthAwarePaginator<int,User>
     */
    public function getUsers(): LengthAwarePaginator
    {
        return User::with(['roles'])
            ->whereHas('roles', function ($query) {
                $query->whereNotIn('name', [RoleEnum::SUPER_ADMIN->value, RoleEnum::ADMIN->value]);
            })
            ->paginate(10);
    }
}
