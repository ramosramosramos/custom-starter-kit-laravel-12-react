<?php

declare(strict_types=1);

namespace App\Enum;

enum PermissionEnum: string
{
    case VIEW_USER = 'view_user';
    case CREATE_USER = 'create_user';
    case UPDATE_USER = 'update_user';
    case DELETE_USER = 'delete_user';

    case VIEW_ROLE = 'view_role';
    case CREATE_ROLE = 'create_role';
    case UPDATE_ROLE = 'update_role';
    case DELETE_ROLE = 'delete_role';
    case VIEW_PERMISSION = 'view_permission';

    case CREATE_PERMISSION = 'create_permission';
    case UPDATE_PERMISSION = 'update_permission';
    case DELETE_PERMISSION = 'delete_permission';
}
