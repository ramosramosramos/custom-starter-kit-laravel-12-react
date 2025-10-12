<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

final class UserService
{
    /**
     * @return LengthAwarePaginator<int,User>
     */
    public function getUsers(?string $search): LengthAwarePaginator
    {
        return User::with(['roles:id,name', 'permissions:id,name', 'roles.permissions:id,name'])
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
            })
            ->select(['id', 'name', 'email'])
            ->paginate(10);
    }
}
