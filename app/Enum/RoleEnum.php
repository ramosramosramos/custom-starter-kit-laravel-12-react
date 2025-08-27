<?php

declare(strict_types=1);

namespace App\Enum;

enum RoleEnum: string
{
    case USER = 'user';
    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';

}
