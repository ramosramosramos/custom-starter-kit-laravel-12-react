import { type NavItem } from '@/types';
import { BookOpen, Folder } from 'lucide-react';

export function useAdditionalNavItems(): NavItem[] {
    return [
        {
            title: 'Repository',
            href: 'https://github.com/laravel/react-starter-kit',
            icon: Folder,
            show: 'show',
            type: 'normal',
        },
        {
            title: 'Documentation',
            href: 'https://laravel.com/docs/starter-kits#react',
            icon: BookOpen,
            show: 'show',
            type: 'normal',
        },
    ];
}
