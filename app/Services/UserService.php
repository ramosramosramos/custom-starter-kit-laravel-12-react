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
    public function getUsers(): LengthAwarePaginator
    {
        return User::with(['roles:id,name', 'permissions:id,name'])
            ->select(['id', 'name', 'email'])
            ->paginate(10);
    }
}
