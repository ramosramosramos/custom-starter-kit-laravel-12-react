import { useCan } from '@/hooks/use-can';
import { current } from '@/lib/helpers/current-route';
import { type NavItem } from '@/types';
import { Folder, LayoutGrid, User } from 'lucide-react';

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
            title: 'Users',
            href: '/users',
            icon: User,
            show: can?.user_view,
            isActive: current('users.index'),
            type: 'normal',
        },

        {
            title: 'App Settings',
            href: '',
            icon: Folder,
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
            ],
        },
    ];
}
