import { useCan } from '@/hooks/use-can';
import { current } from '@/lib/helpers/current-route';
import { type NavItem } from '@/types';
import { Folder, LayoutGrid, Logs, Settings, User, UserCheckIcon } from 'lucide-react';

export function useMainNavItems(): NavItem[] {
    const can = useCan();
    return [
        {
            title: 'Dashboard',
            href: '/dashboard',
            icon: LayoutGrid,
            show: 'show',
            isActive: current('dashboard'),
            type: 'normal',
        },

        {
            title: 'User & Roles',
            href: '',
            icon: User,
            show: 'show',
            isActive: current('users.index') || current('users.create') || current('users.edit') || current('roles.index'),
            type: 'parent',
            children: [
                {
                    title: 'Users',
                    href: '/users',
                    icon: User,
                    show: can?.user_view,
                    isActive: current('users.index'),
                    type: 'normal',
                },
                {
                    title: 'Roles',
                    href: '/roles',
                    icon: UserCheckIcon,
                    show: can?.role_view,
                    isActive: current('roles.index'),
                    type: 'normal',
                },
            ],
        },

        {
            title: 'App Settings',
            href: '',
            icon: Settings,
            show: 'show',
            isActive: current('backups.index'),
            type: 'parent',
            children: [
                {
                    title: 'Backups',
                    href: '/backups',
                    icon: Folder,
                    show: can?.backup_view,
                    isActive: current('backups.index'),
                    type: 'normal',
                },
                {
                    title: 'System logs',
                    href: '/log-viewer',
                    icon: Logs,
                    show: can?.system_log_view,
                    isActive: false,
                    type: 'normal',
                    tag: 'a',
                },
            ],
        },
    ];
}
