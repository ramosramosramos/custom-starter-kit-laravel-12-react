<?php

declare(strict_types=1);

namespace App\Enum;

enum PermissionEnum: string
{
    case BACKUP_VIEW = 'backup_view';
    case BACKUP_GENERATE = 'backup_generate';
    case BACKUP_DOWNLOAD = 'backup_download';
    case BACKUP_DELETE = 'backup_delete';

    case USER_VIEW = 'user_view';
    case USER_CREATE = 'user_create';
    case USER_UPDATE = 'user_update';
    case USER_DELETE = 'user_delete';

    case ROLE_VIEW = 'role_view';
    case ROLE_CREATE = 'role_create';
    case ROLE_UPDATE = 'role_update';
    case ROLE_DELETE = 'role_delete';

    case PERMISSION_VIEW = 'permission_view';
    case PERMISSION_CREATE = 'permission_create';
    case PERMISSION_UPDATE = 'permission_update';
    case PERMISSION_DELETE = 'permission_delete';
}
