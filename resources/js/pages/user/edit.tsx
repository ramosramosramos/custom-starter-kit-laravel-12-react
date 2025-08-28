import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';

import { Head } from '@inertiajs/react';
import UserForm from './partials/user-form';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Edit User',
        href: '',
    },
];

export default function Edit() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit User" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3"></div>
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 p-2 md:min-h-min md:p-5 dark:border-sidebar-border">
                    <UserForm formAbility="edit" />
                </div>
            </div>
        </AppLayout>
    );
}
