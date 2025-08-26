<?php

declare(strict_types=1);

namespace App\Enum;

enum PermissionEnum: string
{
    case USER_VIEW = 'view_user';
    case USER_CREATE = 'create_user';
    case USER_UPDATE = 'update_user';
    case USER_DELETE = 'delete_user';

    case ROLE_VIEW = 'view_role';
    case ROLE_CREATE = 'create_role';
    case ROLE_UPDATE = 'update_role';
    case ROLE_DELETE = 'delete_role';
    case PERMISSION_VIEW = 'view_permission';

    case PERMISSION_CREATE = 'create_permission';
    case PERMISSION_UPDATE = 'update_permission';
    case PERMISSION_DELETE = 'delete_permission';
}
